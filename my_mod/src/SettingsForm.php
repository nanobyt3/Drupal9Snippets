<?php  
/**  
 * @file  
 * Contains Drupal\welcome\Form\SettingsForm.  
 */  
namespace Drupal\my_mod;  
use Drupal\Core\Form\ConfigFormBase;  
use Drupal\Core\Form\FormStateInterface;  
  
class SettingsForm extends ConfigFormBase {  
  /**  
   * {@inheritdoc}  
   */  
  protected function getEditableConfigNames() {  
    return [  
      'my_mod.adminsettings',  
    ];  
  }  
  
  /**  
   * {@inheritdoc}  
   */  
  public function getFormId() {  
    return 'my_mod_form';  
  }  

  /**  
   * {@inheritdoc}  
   */  
  public function buildForm(array $form, FormStateInterface $form_state) {  
    $config = $this->config('my_mod.adminsettings');  
  
    $form['my_mod_message'] = [  
      '#type' => 'textarea',  
      '#title' => $this->t('Welcome message'),  
      '#description' => $this->t('Welcome message display to users when they login'),  
      '#default_value' => $config->get('my_mod_message'),  
    ];  
  
    return parent::buildForm($form, $form_state);  
  }

  /**  
   * {@inheritdoc}  
   */  
  public function submitForm(array &$form, FormStateInterface $form_state) {  
    parent::submitForm($form, $form_state);  
  
    $this->config('my_mod.adminsettings')  
      ->set('my_mod_message', $form_state->getValue('my_mod_message'))  
      ->save();  
  }  
}  