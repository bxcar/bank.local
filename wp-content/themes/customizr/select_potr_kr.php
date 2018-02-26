<?php 


require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$PotrKr = array();
$Bank_Offers = array();
   
$args = array(

	'category' => 3,
	'post_status' => 'publish',
); 

$result = wp_get_recent_posts($args);

if (count($result)>0) 
{
	$i=0;
	
foreach( $result as $p ){ 
   
		//$url = get_permalink($p['ID']);
		//$count($result);thumba = get_the_post_thumbnail($p['ID']);
		
        $PotrKr[$i]['name'] = get_the_title($p['ID']);
		$PotrKr[$i]['id'] = $p['ID'];
		$PotrKr[$i]['bankid'] = get_post_meta( $p['ID'], 'bankid', true);
		$PotrKr[$i]['rating'] = get_post_meta( $p['ID'], 'rating', true);
		$PotrKr[$i]['logo'] = get_the_post_thumbnail_url($p['ID']);
		$PotrKr[$i]['title'] = get_the_post_thumbnail_caption($p['ID'] );
		$PotrKr[$i]['alt'] = get_the_post_thumbnail_caption($p['ID'] );
		$PotrKr[$i]['rate'] = get_post_meta( $p['ID'], 'rate', true);
		$PotrKr[$i]['cu'] = get_post_meta( $p['ID'], 'cu', true);
		$PotrKr[$i]['city'] = get_post_meta( $p['ID'], 'city', true);
		$PotrKr[$i]['target'] = get_post_meta( $p['ID'], 'target', true);
		$PotrKr[$i]['slpr'] = get_post_meta( $p['ID'], 'slpr', true);
		$PotrKr[$i]['guarantee'] = get_post_meta( $p['ID'], 'guarantee', true);
		$PotrKr[$i]['spravka'] = get_post_meta( $p['ID'], 'spravka', true);
		$PotrKr[$i]['form_vidach'] = get_post_meta( $p['ID'], 'form_vidach', true);
		$PotrKr[$i]['srok_rasm'] = get_post_meta( $p['ID'], 'srok_rasm', true);
		$PotrKr[$i]['strahov'] = get_post_meta( $p['ID'], 'strahov', true);
		$PotrKr[$i]['registr'] = get_post_meta( $p['ID'], 'registr', true);
		$PotrKr[$i]['agestart'] = get_post_meta( $p['ID'], 'agestart', true);
		$PotrKr[$i]['category'] = get_post_meta( $p['ID'], 'category', true);
		$PotrKr[$i]['stag'] = get_post_meta( $p['ID'], 'stag', true);
		$PotrKr[$i]['stag_last'] = get_post_meta( $p['ID'], 'stag_last', true);
		$PotrKr[$i]['gr'] = get_post_meta( $p['ID'], 'gr', true);
		$term = array();
		$term['min']=get_post_meta( $p['ID'], 'term_min', true);
		$term['max']=get_post_meta( $p['ID'], 'term_max', true);
		$amount = array();
		$amount['min']=get_post_meta( $p['ID'], 'amount_min', true);
		$amount['max']=get_post_meta( $p['ID'], 'amount_max', true);
		
		$PotrKr[$i]['offers']=array();
		$PotrKr[$i]['offers'][0]['term']=$term; 
		$PotrKr[$i]['offers'][0]['amount']=$amount; 
		
		
		
$i=$i+1;
		
		
}
	
}

		echo json_encode($PotrKr);
		
?>