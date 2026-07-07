<?php if(!defined('CKN')) exit;
$t=htmlspecialchars($page['title'],ENT_QUOTES);
$d=htmlspecialchars($page['description'],ENT_QUOTES);
$canon=rtrim(SITE_URL,'/').($page['path']==='/'?'/':$page['path']);
?><!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title><?php echo $t; ?></title>
<meta name="description" content="<?php echo $d; ?>"/>
<link rel="canonical" href="<?php echo $canon; ?>"/>
<meta name="robots" content="index,follow,max-image-preview:large"/>
<meta name="geo.region" content="IN-KL"/><meta name="geo.placename" content="Thiruvananthapuram"/>
<meta name="ICBM" content="8.5241, 76.9366"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Cokonet Academy"/>
<meta property="og:title" content="<?php echo $t; ?>"/>
<meta property="og:description" content="<?php echo $d; ?>"/>
<meta property="og:url" content="<?php echo $canon; ?>"/>
<meta property="og:image" content="<?php echo rtrim(SITE_URL,'/'); ?>/assets/img/team-wide.jpg"/>
<meta property="og:locale" content="en_IN"/>
<meta name="twitter:card" content="summary_large_image"/>
<link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml"/>
<link rel="stylesheet" href="/assets/css/main.css"/>
<?php if(!empty($page['course_css'])): ?><link rel="stylesheet" href="/assets/css/course.css"/><?php endif; ?>
<?php if(!empty($page['css'])): ?><link rel="stylesheet" href="<?php echo $page['css']; ?>"/><?php endif; ?>
<script>(function(){try{
  var t=localStorage.getItem('ckTheme');
  if(!t) t = (window.matchMedia && matchMedia('(prefers-color-scheme: dark)').matches) ? 'dark' : 'light';
  if(t==='dark') document.documentElement.classList.add('dark');
}catch(e){}})()</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "EducationalOrganization", "name": "Cokonet Academy", "legalName": "Cokonet Technologies Private Limited", "url": "https://www.cokonet.com", "logo": "https://www.cokonet.com/assets/img/team-wide.jpg", "foundingDate": "2010", "sameAs": ["https://www.youtube.com/channel/UCJ0NHVhOkDZH9vPdVrjmLWQ", "https://www.linkedin.com/company/cokonet"], "address": {"@type": "PostalAddress", "streetAddress": "Peedikayil Chambers, Ulloor", "addressLocality": "Thiruvananthapuram", "postalCode": "695011", "addressRegion": "KL", "addressCountry": "IN"}, "contactPoint": [{"@type": "ContactPoint", "telephone": "+91 80754 00500", "contactType": "admissions", "email": "learn@cokonet.com", "areaServed": "IN", "availableLanguage": ["English", "Malayalam"]}]}</script>
<?php foreach(($page['jsonld']??[]) as $j): ?>
<script type="application/ld+json"><?php echo $j; ?></script>
<?php endforeach; ?>
</head>
<body>
