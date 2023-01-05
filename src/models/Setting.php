<?php

namespace greeneye\adminlte\models;

class Setting extends \yii\db\ActiveRecord /*\yii\base\Object implements \yii\web\IdentityInterface */
{

	public static function tableName()
    {
        return 'setting';
    }

		public function rules()
		{
			
			return 
			[
				[['sender_firstname','sender_firstname'],'required'], // Twago Kompabilitätshack, Unsicher! Alternative suchen
				[['sender_email'],'email'], // Twago Kompabilitätshack, Unsicher! Alternative suchen

			];
	
		}

		 

		
		public function getId()
		{
			return $this->id;
		}
		
		public function getFirstname()
		{
			return $this->sender_firstname;
		}
		
		public function setFirstname($firstname)
        {
            $this->sender_firstname = $firstname;

        }

        public function getLastname()
		{
			return $this->sender_lastname ;
		}

		public function setLastname($lastname)
        {
            $this->sender_lastname  = $lastname;

        }

        public function getBaseurl()
		{
			return $this->baseUrl;
		}

		public function setBaseurl($baseUrl)
        {
            $this->baseUrl  = $baseUrl;

        }

				
}