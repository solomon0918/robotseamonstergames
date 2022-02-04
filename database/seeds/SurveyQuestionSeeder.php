<?php

use Illuminate\Database\Seeder;

class SurveyQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('survey_questions')->insert([
            //Survey #1
            [
                'question' => 'What is your first reaction to the product?',
                'choices' => json_encode(
                    [
                        '10' => '10',
                        '9' => '9',
                        '8' => '8',
                        '7' => '7',
                        '6' => '6',
                        '5' => '5',
                        '4' => '4',
                        '3' => '3',
                        '2' => '2',
                        '1' => '1',
                    ]
                ),
                'answers' => '10',
                'rules' => 'required',
                'survey_id' => 1,
                'lk_field_type_id' => 1, // Radio
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'What is your age?',
                'choices' => json_encode(
                    [
                        '10 to 13' => '10-13',
                        '14 to 17' => '14-17',
                        '16 to 18' => '16-18',
                        '18 to 24' => '18-24',
                        '25 to 34' => '25-34',
                        '45 to 54' => '45-54',
                        '55 to 64' => '55-64',
                        '65 to 69' => '65-69',
                        '70 to 75' => '70-75',
                        '75 up' => '75+'
                    ]
                ),
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 2, // Dropdown
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Select that applies',
                'choices' => json_encode(
                    [
                        'mandarin' => 'Mandarin Chinese',
                        'spanish' => 'Spanish',
                        'english' => 'english',
                        'hindi' => 'Hindi',
                        'bengali' => 'Bengali',
                        'portuguese' => 'Portuguese',
                        'russian' => 'Russian',
                        'japanese' => 'Japanese',
                        'punjabi' => 'Western Punjabi',
                        'marathi' => 'Marathi'
                    ]
                ),
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 3, // Checkbox
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'How are you?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 4, // Textarea
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Favorite word',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 5, // Text
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Send email to?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 6, // Email
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random word',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 7, // Password
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'When is your birthday?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 8, // Date
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random number',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 9, // Number
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Please provide your telephone number',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 1,
                'lk_field_type_id' => 10, // Telephone
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Survey #2
            [
                'question' => 'Rate 1 to 5',
                'choices' => json_encode(
                    [
                        '5' => '5',
                        '4' => '4',
                        '3' => '3',
                        '2' => '2',
                        '1' => '1',
                    ]
                ),
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 1, // Radio
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Your phone?',
                'choices' => json_encode(
                    [
                        'android' => 'Android',
                        'iphone' => 'IPhone',
                        'huawei' => 'Huawei'
                    ]
                ),
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 2, // Dropdown
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Select that does not belong to MCU',
                'choices' => json_encode(
                    [
                        'superman' => 'Superman',
                        'ironman' => 'Ironman',
                        'batman' => 'Batman',
                        'spiderman' => 'Spiderman'
                    ]
                ),
                'answers' => json_encode(['superman', 'batman']),
                'rules' => 'required',
                'survey_id' => 2,
                'lk_field_type_id' => 3, // Checkbox
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Tell us about yourself',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 4, // Textarea
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Dog or Cat?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 5, // Text
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random email',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 6, // Email
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Secret',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 7, // Password
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Todays date',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 8, // Date
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'How many hobbies do you have?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 9, // Number
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random Telephone',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 2,
                'lk_field_type_id' => 10, // Telephone
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Survey #3
            [
                'question' => 'Are you human?',
                'choices' => json_encode(
                    [
                        'true' => 'True',
                        'false' => 'False',
                    ]
                ),
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 1, // Radio
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'State',
                'choices' => json_encode(
                    [
                        'california' => 'California',
                        'florida' => 'Florida',
                        'texas' => 'Texas',
                        'alaska' => 'Alaska'
                    ]
                ),
                'answers' => 'california',
                'rules' => 'required',
                'survey_id' => 3,
                'lk_field_type_id' => 2, // Dropdown
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Favorite food/s',
                'choices' => json_encode(
                    [
                        'pizza' => 'Pizza',
                        'taco' => 'Taco',
                        'burger' => 'Burger',
                        'adobo' => 'Adobo'
                    ]
                ),
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 3, // Checkbox
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'What do you see?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 4, // Textarea
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Where are you from?',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 5, // Text
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random email',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 6, // Email
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Password',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 7, // Password
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Next weeks date',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 8, // Date
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random number',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 9, // Number
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Random Telephone',
                'choices' => null,
                'answers' => null,
                'rules' => null,
                'survey_id' => 3,
                'lk_field_type_id' => 10, // Telephone
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
