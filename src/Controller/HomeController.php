<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

	
	public function __construct()
	{

	}
	
	public function index()
	{
	    $overview= 'Tiếp nối thành công của giai đoạn 1, hơn 550 căn hộ đẳng cấp của Central Premium sẽ là lựa chọn sáng giá cho những chủ nhân tương lai.

Với thiết kế đương đại tinh tế và đẳng cấp, Central Premium sẽ trở thành biểu tượng không gian sống hoàn hảo, tối ưu cho gia đình bạn.

Sở hữu căn hộ Central Premium không chỉ giúp bạn tận hưởng một không gian sống hoàn hảo, tối ưu mà còn là kênh “đầu tư” sinh nhiều lợi nhuận bởi một dự án có tính tăng trưởng giá trị trong tương lai.';

		$html = $this->renderView('homepage/home.html.twig',['overview'=>$overview]);
		return new Response($html);
	}
}