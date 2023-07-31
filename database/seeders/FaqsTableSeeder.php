<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc  nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi';
        $answer_fr = 'الألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتة';
        Faq::create([
            'question' => 'What shipping methods are availbale?',
            'question_fr' => 'هل تشحن دوليا؟',
            'answer' => $answer,
            'answer_fr' => $answer_fr,
        ]);
        Faq::create([
            'question' => 'How long will it take to get my package to recive?',
            'question_fr' => 'هل تشحن دوليا؟',
            'answer' => $answer,
            'answer_fr' => $answer_fr,
        ]);
        Faq::create([
            'question' => 'Do you ship internationally?',
            'question_fr' => 'هل تشحن دوليا؟',
            'answer' => $answer,
            'answer_fr' => $answer_fr,
        ]);
        Faq::create([
            'question' => 'What payment methods are accepted?',
            'question_fr' => 'هل تشحن دوليا؟',
            'answer' => $answer,
            'answer_fr' => $answer_fr,
        ]);
        Faq::create([
            'question' => 'Is buying on-line safe?',
            'question_fr' => 'هل تشحن دوليا؟',
            'answer' => $answer,
            'answer_fr' => $answer_fr,
        ]);
    }
}
