<?php

/**
 * @file
 * Contains \Drupal\d\Form\DemoForm.
 */

namespace Drupal\murks\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class DemoForm extends FormBase {

    /**
     * {@inheritdoc}.
     */
    public function getFormId() {
        return 'murks_form';
    }

    /**
     * {@inheritdoc}.
     */
    public function buildForm(array $form, FormStateInterface $form_state) {



        $form['Produktkategorie']=array(
            '#required' =>true,
            '#type' => 'select',
            '#title' =>('Produktkategorie'),

            '#options' => array(
                'Haushaltsgroßgeräte' => t('Haushaltsgroßgeräte'),
                'Haushaltskleingeräte' =>t('Haushaltskleingeräte'),
                'IT-und Telekommunikationsgeräte' => t('IT-und Telekommunikationsgeräte'),
                'Unterhaltungselektronik' =>t('Unterhaltungselektronik'),
                'Beleuchtungskörper' =>t('Beleuchtungskörper'),
                'Werkzeuge' =>t('Werkzeuge'),
                'Spielzeuge,Sport-und Freizeitgeräte' =>t('Spielzeuge,Sport-und Freizeitgeräte'),
                'Medizinische Geräte' =>t('Medizinische Geräte'),
                'Überwachungs-undKontrollinstrumente' =>t('Überwachungs-undKontrollinstrumente'),
                'Ausgabeautomaten' =>t('Ausgabeautomaten')
            ),

        );

        $form ['Unterkategorie']=array(
            '#required' =>true,
            '#type' => 'select',
            '#title' =>('Unterkategorie'),
            '#options' => array(
                'Radiogeräte' =>t('Radiogeräte'),
                'Fernsehgeräte' =>t('Fernsehgeräte'),
                'Videokameras' =>t('Videokameras'),
                'DVD-Player' =>t('DVD-Player'),
                'Blu-Ray-Player' =>t('Blu-Ray-Player'),
                'HI-FI-Anlagen' =>t('Hi-Fi-Anlagen'),
                'Audio-Verstärker' =>t('Audio-Verstärker'),
                'Musikinstrumente' =>t('Musikinstrumente')
            ),


        );

        $form ['Konsum-confirmation']= array(
            '#type' => 'radios',
            '#default_value' =>'privat',
            '#title' =>('Wird das Produkt für den privaten
                oder gewerblichen Gebrauch genutzt und zum Kauf angeboten?'),
            '#options' => array(
                'privat' =>t('privat'),
                'Gewerblich' =>t('Gewerblich'),

            ),


        );

        $form ['Hersteller']=array(
            '#required' =>true,
            '#type' => 'select',
            '#title' =>('Hersteller'),
            '#options' => array(
                'Radiogeräte' =>t('Radiogeräte'),
                'Fernsehgeräte' =>t('Fernsehgeräte'),
                'Videokameras' =>t('Videokameras'),
                'DVD-Player' =>t('DVD-Player'),
                'Blu-Ray-Player' =>t('Blu-Ray-Player'),
                'HI-FI-Anlagen' =>t('Hi-Fi-Anlagen'),
                'Audio-Verstärker' =>t('Audio-Verstärker'),
                'Musikinstrumente' =>t('Musikinstrumente')
            ),


        );


        $form ['sonstige'] = array(
            '#type' =>'textfield',
            '#title' =>t('sonstige:'),
            '#required' => true,

        );

        $form ['Produktbezeichnung'] = array(
            '#type' =>'textfield',
            '#title' =>t('Produktbezeichnung:'),
            '#required' => true,
        );


        $form ['Händler']=array(
            '#required' =>true,
            '#type' => 'select',
            '#title' =>('Händler'),
            '#options' => array(
                'Radiogeräte' =>t('Radiogeräte'),
                'Fernsehgeräte' =>t('Fernsehgeräte'),
                'Videokameras' =>t('Videokameras'),
                'DVD-Player' =>t('DVD-Player'),
                'Blu-Ray-Player' =>t('Blu-Ray-Player'),
                'HI-FI-Anlagen' =>t('Hi-Fi-Anlagen'),
                'Audio-Verstärker' =>t('Audio-Verstärker'),
                'Musikinstrumente' =>t('Musikinstrumente')
            ),
        );

        $form['Preis'] = array(
            '#type' => 'number',
            '#title' => $this->t('Preis in Euro'),
            '#required' =>true,
            '#min' =>1,
            '#default_value' =>1,
            '#step' => 0.01

        );

        $form['Garantie'] = array(
            '#type' => 'number',
            '#title' => $this->t('Garantiezeit in Monaten'),
            '#required' => true,
            '#min' =>1,
            '#default_value' =>1,


        );


        $form ['Länder']=array(
            '#type' => 'select',
            '#required' =>true,
            '#title' =>('Erwerbsland'),
            '#options' => array(
                'Radiogeräte' =>t('Radiogeräte'),
                'Fernsehgeräte' =>t('Fernsehgeräte'),
                'Videokameras' =>t('Videokameras'),
                'DVD-Player' =>t('DVD-Player'),
                'Blu-Ray-Player' =>t('Blu-Ray-Player'),
                'HI-FI-Anlagen' =>t('Hi-Fi-Anlagen'),
                'Audio-Verstärker' =>t('Audio-Verstärker'),
                'Musikinstrumente' =>t('Musikinstrumente')
            ),
        );

        $form['Kaufdatum'] = array(
            '#type' => 'date',
            '#required' =>true,
            '#title' => $this->t('Kaufdatum'),
            '#default_value' => array(
                'year' => 2020,
                'month' => 2,
                'day' => 15,
            ),
        );

        $form['Ereignisdatum'] = array(
            '#type' => 'date',
            '#required' =>true,
            '#title' => $this->t('Ereignisdatum Schadensfall'),
            '#default_value' => array(
                'year' => 2020,
                'month' => 2,
                'day' => 15,
            ),
        );

        $form ['Schadenskategorie']=array(
            '#type' => 'select',
            '#required' =>true,
            '#title' =>('Schadenskategorie'),
            '#options' => array(
                'Radiogeräte' =>t('Radiogeräte'),
                'Fernsehgeräte' =>t('Fernsehgeräte'),
                'Videokameras' =>t('Videokameras'),
                'DVD-Player' =>t('DVD-Player'),
                'Blu-Ray-Player' =>t('Blu-Ray-Player'),
                'HI-FI-Anlagen' =>t('Hi-Fi-Anlagen'),
                'Audio-Verstärker' =>t('Audio-Verstärker'),
                'Musikinstrumente' =>t('Musikinstrumente')
            ),
        );

        $form ['Schadenskategorie']= array(
            '#type' => 'radios',
            '#title' =>('Wie äußert sich der Schaden ?'),
            '#default_value' =>'Einschränkung der Funktion',
            '#options' => array(
                'Einschränkung der Funktion' =>t('Einschränkung der Funktion'),
                'Teilschaden' =>t('Teilschaden'),
                'Komplettschaden' =>t('Komplettschaden')

            ),

        );

        $form ['Schadensbeschreibung'] = array(
            '#type' => 'textarea',
            '#required' =>true,
            '#title' => ('Beschreiben Sie den Schaden kurz mit eigenen Worten'),
        );


        $form ['uploaded_file'] = array (
            '#type' => 'managed_file',
            '#title' => t(' Optional : Sie können bis zu drei Bilder zur Meldung hinzufügen, '),
            '#description' => t('Allowed extensions: png jpg jpeg '),
            '#upload_validators' => [
                'file_validate_is_image' => array(),
                'file_validate_extensions' => array('png jpg jpeg'),
            ]
        );

        $form ['Kommentar'] = array (
            '#type' => 'textarea',
            '#required' =>true,
            '#title' =>t('Optional : Was hat Sie besonders genervt?'),
        );

        $form ['Motiv']=array(
            '#required' =>true,
            '#type' => 'select',
            '#title' =>('Wie schätzen sie das Herstellermotiv ein ?'),
            '#options' => array(
                'Keine Angabe' =>t('Keine Angabe'),
                'Nicht abschätzbar ' =>t('Nicht abschätzbar'),
                'Schlamperei' =>t('Schlamperei'),
                'Wettbewerb' =>t('Wettbewerb'),
                'Gier' =>t('Gier'),
                'Fahrlässigkeit' =>t('Fahrlässigkeit'),
                'Arglist' =>t('Arglist'),

            ),
        );

        $form ['Kommentar'] = array (
            '#type' => 'textarea',
            '#required' =>true,
            '#title' =>t('Was könnte man bessern ?'),
        );


        $form ['Würden Sie das Gerät erneut kaufen ? ']= array(
            '#required' =>true,
            '#type' => 'radios',
            '#title' =>('Würden Sie das Gerät erneut kaufen ?'),
            '#default_value' =>'Wenn ohne Murks',
            '#options' => array(
                'ja' =>t('ja'),
                'nein' =>t('nein'),
                'Wenn ohne Murks' =>t('Wenn ohne Murks'),

            ),

        );


        $form ['Besser-machen'] = array (
            '#type' => 'textarea',
            '#required' =>true,
            '#title' =>t('Was könnte man besser machen?'),
        );




        $form['actions'] = array('#type' => 'actions');
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Save'),
            '#attributes' => array('onclick' => 'if(!confirm("Haben Sie ihre Eingaben gründlich überprüft?")){return false;}')

        );





        return $form;
    }





    /**
     * {@inheritdoc}
     */



    public static function validateNumber(&$element, FormStateInterface $form_state, &$complete_form)
    {
        $value = $element['#value'];
        if ($value === '') {
            return;
        }

        $name = empty($element['#title']) ? $element['#parents'][0] : $element['#title'];


        if (!is_numeric($value)) {
            $form_state->setError($element, t('%name must be a number.', array('%name' => $name)));
            return;
        }


        if (isset($element['#min']) && $value < $element['#min']) {
            $form_state->setError($element, t('%name must be higher than or equal to %min.', array('%name' => $name, '%min' => $element['#min'])));
        }

    }


        public function validateForm(array &$form, FormStateInterface $form_state) {


    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        foreach ($form_state->getValues() as $key => $value) {
            drupal_set_message(  $key . ': ' . $value);
        }


    }






}
