<?php

namespace Database\Seeders;

use App\Models\Inv_itemcard_movements_types;
use Illuminate\Database\Seeder;

class InvItemcardMovementsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $inv_itemcard_movements_categories1 = Inv_itemcard_movements_types::create([
            'id'   => 1,
            'type' => 'مشتريات',
        ]);


        $inv_itemcard_movements_categories2 = Inv_itemcard_movements_types::create([
            'id'   => 2,
            'type' => 'مرتجع مشتريات بأصل الفاتورة',
        ]);


        $inv_itemcard_movements_categories3 = Inv_itemcard_movements_types::create([
            'id'   => 3,
            'type' => 'مرتجع مشتريات عام',
        ]);


        $inv_itemcard_movements_categories4 = Inv_itemcard_movements_types::create([
            'id'   => 4,
            'type' => 'مبيعات',
        ]);


        $inv_itemcard_movements_categories5 = Inv_itemcard_movements_types::create([
            'id'   => 5,
            'type' => 'مرتجع مبيعات عام',
        ]);


        $inv_itemcard_movements_categories6 = Inv_itemcard_movements_types::create([
            'id'   => 6,
            'type' => 'جرد بالمخازن',
        ]);


        $inv_itemcard_movements_categories7 = Inv_itemcard_movements_types::create([
            'id'   => 7,
            'type' => 'مرتجع صرف داخلى لمندوب',
        ]);


        $inv_itemcard_movements_categories8 = Inv_itemcard_movements_types::create([
            'id'   => 8,
            'type' => 'تحويل بين مخازن',
        ]);


        $inv_itemcard_movements_categories9 = Inv_itemcard_movements_types::create([
            'id'   => 9,
            'type' => 'مبيعات صرف مباشر لعميل',
        ]);


        $inv_itemcard_movements_categories10 = Inv_itemcard_movements_types::create([
            'id'   => 10,
            'type' => 'مبيعات صرف لمندوب التوصيل',
        ]);


        // $inv_itemcard_movements_categories11 = Inv_itemcard_movements_types::create([
        //     'type' => 'صرف خامات لخط التصنيع',
        // ]);


        // $inv_itemcard_movements_categories12 = Inv_itemcard_movements_types::create([
        //     'type' => 'رد خامات من خط التصنيع',
        // ]);


        // $inv_itemcard_movements_categories13 = Inv_itemcard_movements_types::create([
        //     'type' => 'إستلام إنتاج تام من خط التصنيع',
        // ]);


        // $inv_itemcard_movements_categories14 = Inv_itemcard_movements_types::create([
        //     'type' => 'رد إنتاج تام لخط التصنيع',
        // ]);


        $inv_itemcard_movements_categories15 = Inv_itemcard_movements_types::create([
            'id'   => 15,
            'type' => 'حذف الصنف من تفاصيل فاتورة مبيعات مفتوحة',
        ]);


        $inv_itemcard_movements_categories16 = Inv_itemcard_movements_types::create([
            'id'   => 16,
            'type' => 'حذف الصنف من تفاصيل فاتورة مرتجع مبيعات عام مفتوحة',
        ]);


        // $inv_itemcard_movements_categories17 = Inv_itemcard_movements_types::create([
        //     'type' => 'صرف خامات لخط الإنتاج',
        // ]);


        // $inv_itemcard_movements_categories18 = Inv_itemcard_movements_types::create([
        //     'type' => 'حذف صنف مضاف على فاتورة صرف خامات لخط إنتاج',
        // ]);

    }
}
