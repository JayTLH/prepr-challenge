<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dataTitle = array(
            'Linckia - Huai Hai Community',
            'Linckia - Dong Hai 7th',
            'Chuangzhi Community',
            'COWORK - Chuanzhi World Business Center',
            'SOHO 3Q - Bund 3Q l',
            'SOHO3Q - Bund 3Q II',
            'SOHO3Q - Sky 3Q',
            'Linckia - Tongji Community',
            'XNode - Zhang Jiang',
            'XNode - Hong Qiao',
            'Naked Hub - Xikang',
            'MIXPACE Townhide',
            'Naked Hub - Fu Xing Lu',
            'We Geek',
            'Terminal',
            'UG Startup Factory',
            'Vere Loft',
            'Generator 9.8',
            'Publica',
            'Dev X',
            'Uncubate',
            'DoubleO',
            'Pravel CoWorking Space',
            '14 The Hub',
            'Daftar - The coworking space',
            '5B Colab',
            'Pravel Solutions',
            'Next57 Coworking',
            'InstaOffice',
            'Spaces'
        );

        $dataLat = array(
            31.224671,
            31.226267,
            31.30823,
            31.332154,
            31.2315534,
            31.2315534,
            31.2208583,
            31.278778,
            31.1812077,
            31.204984,
            31.24338,
            31.230828,
            31.212578,
            31.09247645,
            41.7074429,
            41.7229554,
            41.7062892,
            41.6997859,
            41.69745123,
            23.0290001,
            23.0432348,
            23.032447,
            22.9946966,
            23.0418232,
            23.0282646,
            23.03156937,
            23.0119548,
            23.0326554,
            23.1586396,
            23.0263387,
        );

        $dataLon = array(
            121.480206,
            121.449214,
            121.50768,
            121.524731,
            121.492723,
            121.492723,
            121.35243,
            121.504764,
            121.605051,
            121.402548,
            121.439496,
            121.465445,
            121.458184,
            121.327414,
            44.7655064,
            44.7797785,
            44.783586,
            44.8020677,
            44.7999328,
            72.53016890000001,
            72.549655,
            72.510955,
            72.4991682,
            72.51680639999999,
            72.542312,
            72.559113,
            72.5148738,
            72.50821209999999,
            72.6831136,
            72.52439440000001,
        );

        $dataAddress = array(
            '17th Floor, 1 Huai Hai Zhong Road, Huangpu, Shanghai, China',
            '7th Floor, Dong Hai Plaza Building 3, Yuyuan East Road, Shanghai, China',
            '6F, Tower 2, Chuangzhi Science & Technology Center, 477 Zhengli Road, Shanghai, China',
            '3th Floor, Chuanzhi World Business Center Building 6,7, 500 Zheng Yue Road, Yangpu District, Shanghai, China',
            'Bund SOHO, 88 2nd East Zhongshan Road, Huangpu District, Shanghai, China',
            'Bund SOHO, 88 2nd East Zhongshan Road, Huangpu District, Shanghai, China',
            '968 Jin Zhong Road, Changning District, Shanghai, China',
            '1st Floor, Design Center Promotion Center, 1230 Siping Road, Yangpu District, Shanghai, China',
            '4F, 800 Naxian Road, Pudong District, Shanghai, China',
            '5F, Building D, Orient International Mansion, 85 Loushanguan Road, Changning District, Shanghai, China',
            '189 Changshou Road, Putuo District, Shanghai, China',
            '612 Nan Jing Xi Lu, Shanghai, China',
            '3th Floor, 1237 Fu Xing Zhong Road, Xuhui District, Shanghai, China',
            'Xinzhuang Lu 258, Palm Plaza, Building 32, Shanghai, China',
            '34-36 Irakli Abashidze Street, Tbilisi, Georgia',
            '77a Merab Kostava Street, Tbilisi, Georgia',
            'Khorava Street 3, Tbilisi, Georgia',
            'Antoneli street #29, Tbilisi, Georgia',
            '18 Lado Gudiashvili Street, Tbilisi, Georgia',
            'B/H Keshav Baugh Party Plot,, Near Shivalik High-Street., I I M, Vastrapur, Ahmedabad, Gujarat 380015, India, Vastrapur, Ahmedabad, India',
            '308, Aeon Complex, Vijay Cross Road, Near Angira Society, Ahmedabad, India',
            'B501 Krishna Complex, Bodakdev, Ahmedabad, India',
            'Makarba, Ahmedabad, Gujarat, Makarba Road, S.G. Highway, Sarkhej, Ahmedabad, India',
            '605 Venus Benecia Maruti Nexa Building Pakwaan restaurant service lane S.G. Highway, Ahmedabad, India',
            'Panjara Pol, Ambawadi, Ahmedabad, Gujarat 380015, India, IIM Road, Ahmedabad, India',
            '5B Vishwabharti society, Opp BSNL office, Opposite BSNL telephone exchange, Ahmedabad, India',
            'Dev Auram, Prahlad Nagar, Ahmedabad, India',
            '2nd Floor, Block N, S.G. Road, Safal Mondeal Retail Park, Bodakdev Near, Rajpath Rangoli Rd, Ahmedabad, India',
            'Gujarat International Finance Tec-City, Gujarat, Building 56A, Block No. 56, Road-5C, Zone-5, Gandhinagar, India',
            'Iscon Emporio, Next to Star Bazaar, Jodhpur Crossroads, Ahmedabad, India',
        );

        $dataCity = array(
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Shanghai',
            'Tbilisi',
            'Tbilisi',
            'Tbilisi',
            'Tbilisi',
            'Tbilisi',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Ahmedabad',
            'Gandhinagar',
            'Ahmedabad',
        );

        $dataCountry = array(
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'China',
            'Georgia',
            'Georgia',
            'Georgia',
            'Georgia',
            'Georgia',
            'India',
            'India',
            'India',
            'India',
            'India',
            'India',
            'India',
            'India',
            'India',
            'India',
            'India',
        );

        // seed all lab information
        for ($i = 0; $i < count($dataTitle); $i++) {
            DB::table('labs')->insert([
                'username' => 'labmanager',
                'organization' => null,
                'title' => $dataTitle[$i],
                'description' => null,
                'category' => 'Co-working Space',
                'privacy' => 'Public',
                'image_name' => null,
                'latitude' => $dataLon[$i],
                'longitude' => $dataLat[$i],
                'address' => $dataAddress[$i],
                'city' => $dataCity[$i],
                'country' => $dataCountry[$i],
                'university' => null,
                'working_space' => null,
                'technology' => null,
                'incubator' => null,
                'status' => '1',
            ]);
        }

        // seed admin login
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'test@test.com';
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // ]);
    }
}
