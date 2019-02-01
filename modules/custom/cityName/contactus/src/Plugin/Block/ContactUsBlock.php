<?php
/**
 * @file
 * Contains \Drupal\contactus\Plugin\Block\ContactUsBlock.
 */
namespace Drupal\contactus\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Provides a contact us block with which you submit form
 *
 * @Block(
 *   id = "contactus_block",
 *   admin_label = @Translation("Contact us block"),
 *   category = @Translation("Custom contact us block example")
 * )
 */
class ContactUsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Return the form @ Form/ContactUsBlockForm.php.
    $form = \Drupal::formBuilder()->getForm('Drupal\contactus\Form\ContactUsBlockForm');
    return $form;
  }
  
}
