<?php


namespace Drupal\contactus\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * contact us block form
 */
class ContactUsBlockForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'contactus_block_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // name
      $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
            '#description' => $this->t('Enter your name'),
    );

    //email
    $form['email'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('email'),
      '#description' => $this->t('Enter your email'),
    );
    //contactNo
    $form['contactNo'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('contactNo'),
      '#description' => $this->t('Enter your contact number'),
    );
    //Body
    $form['body'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('body'),
      '#description' => $this->t('Enter your message'),
    );


    // Submit.
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('submit'),
    );

    return $form;
  }
    /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $name = $form_state->getValue('name');
    $email = $form_state->getValue('email');
    $contactNo = $form_state->getValue('contactNo');
    $body = $form_state->getValue('body');
    if (empty($name)) {
      $form_state->setErrorByName('name', $this->t('Please enter your name.'));
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $form_state->setErrorByName('name', $this->t('Only letters are allowed.'));
    }
    if (empty($email)) {
      $form_state->setErrorByName('email', $this->t('Please enter your email.'));
    }
    if(!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $email))
    {
       $form_state->setErrorByName('email', $this->t('email address is not valid'));
    }
    if (empty($contactNo)) {
      $form_state->setErrorByName('contactNo', $this->t('Please enter your contact number.'));
    }
    if(!preg_match('/^[0-9]{10}+$/', $contactNo))
    {
      $form_state->setErrorByName('contactNo', $this->t('only numbers are allowed.'));
    }
    if (empty($body)) {
      $form_state->setErrorByName('body', $this->t('Please enter some content.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
	db_insert('contactus')
	    ->fields(array(
	      'name' => $form_state->getValue('name'),
	      'email' => $form_state->getValue('email'), 
	      'contactNo' => $form_state->getValue('contactNo'), 
	      'body' => $form_state->getValue('body')    
	    ))->execute(); 
        drupal_set_message($this->t('Your application is being submitted!'));
  }
}
