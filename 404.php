<?php
require __DIR__.'/includes/config.php';
http_response_code(404);
$page = [
  'title' => 'Page not found | Cokonet Academy',
  'description' => 'The page you were looking for does not exist. Browse Cokonet Academy courses, placements and contact details.',
  'path' => '/404', 'nav' => '', 'css' => '', 'course_css' => false, 'jsonld' => [], 'page_js' => '',
];
require __DIR__.'/includes/head.php';
require __DIR__.'/includes/header.php';
?>
<section class="sec">
<div class="wrap" style="text-align:center;padding:90px 0 110px">
<span class="eyebrow" style="justify-content:center">404</span>
<h1 class="st" style="font-size:clamp(1.8rem,4vw,2.6rem)">This page took a <span class="serif">different career path.</span></h1>
<p class="lede" style="margin:14px auto 30px">The link is broken or the page has moved. The good stuff is still here.</p>
<div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
<a class="btn btn-primary" href="/">Go to the homepage</a>
<a class="btn btn-navy" href="/#courses">Browse courses</a>
<a class="btn btn-ghost" href="/contact">Contact us</a>
</div>
</div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>
<?php require __DIR__.'/includes/scripts.php'; ?>
