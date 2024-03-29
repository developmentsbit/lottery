<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aboutuses')->delete();
        
        \DB::table('aboutuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'details' => 'การออกสลากกินแบ่ง เป็นต้น ในประเทศไทยตามประวัติศาสตร์เริ่มมีมาตั้งแต่สมัยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว รัชกาลที่ 5 โดยมีชาวต่างชาติชาวอังกฤษชื่อ “ครูอัลบาสเตอร์” เป็นคนแรกที่แนะนำรูปแบบการจับสลากยุโรปโดยเรียกกันว่า “ลอตเตอรี่” โดยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว พระราชทานพระบรมราชโองการโปรดเกล้าฯ ให้ออกสลากเป็นครั้งแรกในประเทศไทย เมื่อ พ.ศ. 2417 เนื่องในวโรกาสวันเฉลิมพระชนมพรรษาของพระบาทสมเด็จพระเจ้าอยู่หัว มีวัตถุประสงค์เพื่อช่วยเหลือพ่อค้าชาวต่างประเทศที่นำสินค้าของตนมาจัดแสดงในพิพิธภัณฑ์ที่อาคารคอนคาเดียในพระบรมมหาราชวัง และต่อมาในสมัยรัชกาลที่ 6 ในปี พ.ศ. 2460 ซึ่งเป็นช่วงสงครามโลกครั้งที่ 1 สหราชอาณาจักร อังกฤษ ซึ่งเป็นประเทศที่อยู่ในฝ่ายสัมพันธมิตร ตั้งใจจะกู้ยืมเงินจากไทยเพื่อใช้ในการทำสงคราม แต่ไม่สามารถกู้ยืมโดยตรงจากรัฐบาลไทยได้ เพราะจะส่งผลต่องบประมาณของสภาผู้รักชาติแห่งชาติอังกฤษ จึงมีนโยบายที่จะกู้ยืมเงินจากประชาชนโดยการออกสลาก โดยได้รับอนุญาตจากพระบาทสมเด็จพระจอมเกล้าเจ้าอยู่หัว',
                'details_bn' => 'การออกสลากกินแบ่ง เป็นต้น ในประเทศไทยตามประวัติศาสตร์เริ่มมีมาตั้งแต่สมัยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว รัชกาลที่ 5 โดยมีชาวต่างชาติชาวอังกฤษชื่อ “ครูอัลบาสเตอร์” เป็นคนแรกที่แนะนำรูปแบบการจับสลากยุโรปโดยเรียกกันว่า “ลอตเตอรี่” โดยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว พระราชทานพระบรมราชโองการโปรดเกล้าฯ ให้ออกสลากเป็นครั้งแรกในประเทศไทย เมื่อ พ.ศ. 2417 เนื่องในวโรกาสวันเฉลิมพระชนมพรรษาของพระบาทสมเด็จพระเจ้าอยู่หัว มีวัตถุประสงค์เพื่อช่วยเหลือพ่อค้าชาวต่างประเทศที่นำสินค้าของตนมาจัดแสดงในพิพิธภัณฑ์ที่อาคารคอนคาเดียในพระบรมมหาราชวัง และต่อมาในสมัยรัชกาลที่ 6 ในปี พ.ศ. 2460 ซึ่งเป็นช่วงสงครามโลกครั้งที่ 1 สหราชอาณาจักร อังกฤษ ซึ่งเป็นประเทศที่อยู่ในฝ่ายสัมพันธมิตร ตั้งใจจะกู้ยืมเงินจากไทยเพื่อใช้ในการทำสงคราม แต่ไม่สามารถกู้ยืมโดยตรงจากรัฐบาลไทยได้ เพราะจะส่งผลต่องบประมาณของสภาผู้รักชาติแห่งชาติอังกฤษ จึงมีนโยบายที่จะกู้ยืมเงินจากประชาชนโดยการออกสลาก โดยได้รับอนุญาตจากพระบาทสมเด็จพระจอมเกล้าเจ้าอยู่หัว',
                'created_at' => NULL,
                'updated_at' => '2024-02-19 15:19:59',
            ),
        ));
        
        
    }
}