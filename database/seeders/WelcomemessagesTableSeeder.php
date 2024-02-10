<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WelcomemessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('welcomemessages')->delete();
        
        \DB::table('welcomemessages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Welcome To The Govt. Lottery Office',
                'title_bn' => 'সরকারী লটারি অফিসে স্বাগতম',
                'details' => 'Issuing lottery tickets etc. In Thailand, according to history, it began to exist in the reign of King Chulalongkorn, King Rama V, with a British foreigner named "Teacher Albaster" was the first to introduce the European lottery drawing style by calling it the "Lottery" by His Majesty King Chulalongkorn. Royal permission was given to the Royal Thai Chamberlain to issue lotteries for the first time in Thailand in 1874 on the occasion of His Majesty the King\'s birthday. The objective is to help foreign merchants who bring their products to be displayed in the museum at the Concadia Building in the Grand Palace. And later, during the reign of King Rama VI in the year 1917, which was during World War 1, the United Kingdom, England, which was a country on the Allied Powers. Intending to borrow money from Thailand to use in the war effort But cannot borrow directly from the Thai government. Because it will affect the budget of the National Patriotic Council of England. Therefore, the policy is to borrow money from the people by issuing lotteries. It received royal permission from His Majesty King Mongkut Klao.',
                'details_bn' => 'থাইল্যান্ডে লটারির টিকিট দেওয়া ইত্যাদি। ইতিহাস অনুসারে, রাজা চুলালংকর্নের রাজত্বকালে এটির অস্তিত্ব শুরু হয়েছিল, রাজা পঞ্চম রাম, "শিক্ষক আলবাস্টার" নামে একজন ব্রিটিশ বিদেশী প্রথম ইউরোপীয় লটারি অঙ্কন শৈলীর প্রবর্তন করেছিলেন যা এটিকে বলে। মহামান্য রাজা চুলালংকর্নের "লটারি"। 1874 সালে মহামান্য রাজার জন্মদিন উপলক্ষে থাইল্যান্ডে প্রথমবারের মতো লটারি ইস্যু করার জন্য রয়্যাল থাই চেম্বারলেইনকে রাজকীয় অনুমতি দেওয়া হয়েছিল। উদ্দেশ্য হল বিদেশী বণিকদের সাহায্য করা যারা তাদের পণ্যগুলি গ্র্যান্ড প্যালেসের কনকাডিয়া বিল্ডিং-এ যাদুঘরে প্রদর্শনের জন্য নিয়ে আসে। এবং পরবর্তীতে, 1917 সালে রাজা রাম ষষ্ঠের রাজত্বকালে, যা ছিল 1 বিশ্বযুদ্ধের সময়, যুক্তরাজ্য, ইংল্যান্ড, যা মিত্রশক্তির একটি দেশ ছিল। যুদ্ধের প্রচেষ্টায় ব্যবহার করার জন্য থাইল্যান্ড থেকে অর্থ ধার করার ইচ্ছা কিন্তু থাই সরকারের কাছ থেকে সরাসরি ধার করা যাবে না। কারণ এটি ইংল্যান্ডের জাতীয় দেশপ্রেমিক কাউন্সিলের বাজেটকে প্রভাবিত করবে। তাই লটারি করে জনগণের কাছ থেকে টাকা ধার নেওয়ার নীতি। এটি মহামান্য রাজা মংকুট ক্লাও থেকে রাজকীয় অনুমতি পেয়েছে।',
                'created_at' => NULL,
                'updated_at' => '2024-02-10 11:25:56',
            ),
        ));
        
        
    }
}