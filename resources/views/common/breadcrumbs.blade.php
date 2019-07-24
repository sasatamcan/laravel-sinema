<section class="breadcrumbs">
<ul>
@php
    foreach($breadcrumbs as $bread){
        if(!empty($bread['url'])){
            echo '<li><a href="'.$bread['url'].'">'.$bread['label'].'</a>';
        }
        else {
            echo '<li><span>'.$bread['label'].'</span>';
        }
    }
@endphp
</ul>
</section>
 