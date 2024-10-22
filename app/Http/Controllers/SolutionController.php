<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    function sap()
    {
        seo()->title('Phần mềm quản trị doanh nghiệp Compare SAP Business One')
            ->image(asset('assets/images/banner-sap-intro.png'))
            ->description('Grant Thornton cung cấp giải pháp quản trị doanh nghiệp SAP Business One ✔️Áp dụng đa ngành✔️Tối ưu đồng bộ và ổn định✔️ Liên hệ: 024 3850 1686')
            ->tag('og:site_name', 'Grant Thornton TSC')
            ->tag('og:type', 'article')
            ->tag('og:title', 'Phần mềm quản trị doanh nghiệp Compare SAP Business One')
            ->tag('og:description', 'Grant Thornton cung cấp giải pháp quản trị doanh nghiệp SAP Business One ✔️Áp dụng đa ngành✔️Tối ưu đồng bộ và ổn định✔️ Liên hệ: 024 3850 1686');

        return view('sap');
    }
}
