<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class quistionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert
        (

[
    [
        'name'=>'هل مزاجك حزين اغلب الاوقات؟','illnesses_id'=>'1'
    ],
    [
        'name'=>'هل تشعر بفقدان شهية ونقصان بالوزن؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بصعوبة في التواصل مع الاشخاص المحيطين؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بفرط شهية وزيادة في الوزن؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تعاني من قلة النوم؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل ترى كوابي اثناء نومك؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بضعف في الهمة والنشاط؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر انك بلا قيمة في المجتمع؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بصعوبة في التركيز والتفكير؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بصعوبة في اتخاذ القرارات؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تفكر في الانتحار او تتمنى الموت؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل يعاني احد أبويك من المشاكل السابقة؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل ستشارك حزنك مع أحد؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تأخذ أدوية تحوي دوبامين أو سيروتونين؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تعاني من مشكلة ليس لها حل او لا تستطيع حلها؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بفقدان الشغف اتجاه الامور التي كنت تستمتع بها؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بالألم اتجاه أمور معينة؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تبكي عندما تحزن؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تلوم نفسك على اشياء تفعلها أو لا تفعلها؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر باليأس اتجاه شيء حصل معك في الماضي او يحدث الأن او ممكن ان يحدث في المستقبل؟','illnesses_id'=>'1'
    ],[
        'name'=>'هل تشعر بالخدر العاطفي؟','illnesses_id'=>'1'
    ],
    [
        'name'=>'هل تشعر باليأس من المستقبل؟','illnesses_id'=>'1'
    ],

    [
        'name'=>'هل تشعر دوما بالقلق حتى بدون سبب؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تعود لك ذكريات سيئة حصلت في حياتك؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل ترى كوابيس؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تشعر انك متقلب المزاج؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل لديك صعوبة في الادراك؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تشعر بالخوف والهلع والغضب المفاجئ بدون سبب؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تحاول الانعزال عن العالم الخارجي؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل فقدت شغفك اتجاه أمر معين تحبه؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تشعر بالخدر العاطفي؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تتجنب اي شيء يذكرك بحدث سيء مر معك في الماضي؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تشعر باليأس بشأن المستقبل؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تأتيك أفكار سلبية عن نفسك او عن الاخرين او عن العالم؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تشعر بالانفصال عن العائلة او الاصدقاء؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تمر بنوبة من العصبية والغضب؟','illnesses_id'=>'2'
    ],
    [
        'name'=>'هل تجد صعوبة في التركيز؟ ','illnesses_id'=>'2'
    ],
    [
        'name'=>'هل تجد صعوبة في النوم؟ ','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل لديك احساس انك مكتئب؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تتملكك العواطف السلبية ؟','illnesses_id'=>'2'
    ],
    [
        'name'=>' هل تتهرب من التفكير في أنك في موضع خطر؟','illnesses_id'=>'2'
    ],
    [
        'name'=>'هل تفكر في وفاة شخص عزيز عليك؟ ','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل تغضب عند التحدث عن هذا الشخص؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل تشعر باللوم وتأنيب الضمير لوفاته؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل تشعر بصعوبة حيال عيش اليوم العادي؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل تفضل العزلة عن العالم؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل تفضل الابتعاد عن التجمعات؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل لديك احساس بأنك مكتئب؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل لديك الشعور بعدم الرغبة بالحياة؟','illnesses_id'=>'3'
    ],
      [
        'name'=>' هل توالت عليك أحداث عصيبة في الفترة السابقة من حياتك؟','illnesses_id'=>'4'
    ],
      [
        'name'=>' هل لديك قلق بشكل عام منذ الصغر؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل والداك يشعران بالقلق حيال أغلب الأمور العادية؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل تشعر باضطراب في النوم؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل تفكر كثيرا ماذا ستفعل في لحظة كارثية ما؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل تعاني من فقدان الشهية؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل تشعر في رجفة بجسمك او معدتك؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل أتتك افكار سلبية بعد حدوث الكارثة؟','illnesses_id'=>'4'
    ],
    [
        'name'=>' هل حدث شيء حاد ومؤذي لك في حياتك؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل انتقل مكان عملك في الأونة الأخيرة او البعيدة؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل فقدت أحد الأشخاص العزيزين عليك؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل انت مصاب بمرض خطير او تشوه بالجسم؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل أنت حزين جدا على ما أنت عليه؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل أنت غير قادر على التكيف على ما أنت عليه؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل تعتقد انك شخص منعزل؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل تشعر بالأرق والتوتر أغلب الأوقات؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل تشعر بفقدان الشهية؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل تشعر بفرط في الشهية؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل يسيطر عليك شعور الغضب والعصبية؟','illnesses_id'=>'5'
    ],
    [
        'name'=>' هل تتسارع ضربات قلبك بين الحين والأخر في أغلب الاوقات؟','illnesses_id'=>'5'
    ],

]);
    }
}
