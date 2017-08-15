@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
			<a href="https://rawgit.com/Cphil31/cecilephilippedeveloppeur/master/resources/views/cv.CECILE.Philippe.pdf" download="Curriculum_Vitae_CECILE_Philippe">
			<h1>Telechargez mon Cv en PDF</a></h1>

		<div class="icon">
			<a href="mailto:cecilephilippe31@gmail.com" ><i class="mail outline icon" style="margin-left:auto;margin-right:auto; font-size:6em;"></i></a>	
			<a href="https://www.linkedin.com/in/philippe-cecile-a579b212b/" target="_blank"><i class="linkedin square icon" style="font-size:6em;"></i></a>
			<a href="https://github.com/Cphil31" target="_blank"><i class="github icon" style="font-size:6em;"></i></a>
			<a href="https://about.gitlab.com/" target="_blank"><i class="gitlab icon" style="font-size:6em;"></i></a>
			<a href="https://twitter.com/Dev_phil971" target="_blank"><i class="twitter square icon" style="font-size:6em;"></i></a>
			<a href="https://www.facebook.com/DonSanacho" target="_blank"><i class="facebook icon" style="font-size:6em;"></i></a>
			<a href="https://www.instagram.com/donsanacho/" target="_blank"><i class="instagram icon" style="font-size:6em;"></i></a>
			<a href="https://www.mixcloud.com/vito-sanacho/" target="_blank"><i class="mixcloud icon" style="font-size:6em;"></i></a>
		</div>


@endsection