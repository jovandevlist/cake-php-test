<?php
namespace App\Controller;

use Cake\Core\Configure;

/**
 * Api controller
 *
 * This controller will serve contact info based in database contact table.
 *
 */
class ContactController extends AppController
{
    public function initialize()
    {
        $this->loadModel('Contacts');
    }

    public function index()
    {
        return $this->redirect('/');
    }

    /**
     * Displays a contact info
     *
     * @param index $index.
     * @return contact info.
     */
    public function viewContact(...$index)
    {
        if (count($index) == 1) {

            $contacts = $this->Contacts->find('all', [
                'conditions' => ['Contacts.id =' => $index[0]]
            ]);

            $result = $contacts->toArray();
            $this->set('contacts', $result);

        } else if (count($index) == 2 && $index[1] == 'ext') {

            $contacts = $this->Contacts->find('all', [
                'conditions' => ['Contacts.id =' => $index[0]]
            ])->contain(['Companies']);

            $result = $contacts->toArray();
            $this->set('contacts', $result);
            $this->set('company', true);

        }
        
    }
}
