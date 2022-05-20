{{-- Vanilla PHP --}}
<h1><?php echo $heading; ?></h1>

<?php 
    if(count($listings) ==0 ):
        echo '<p>No listings Found</p>';
    endif;
?>

<?php foreach($listings as $list): ?>
    <h2>
        <a href="/listing/<?php echo $list['id'] ?>">
        <?php echo $list['title']; ?>
        </a>
    </h2>
    <p><?php echo $list['desc']; ?></p>
<?php endforeach; ?>

{{-- Blade Syntax --}}
<h1>{{$heading}}</h1>

@if (count($listings) ==0)
    <p>No listings Found</p>
@endif

@foreach($listings as $list)
    <h2>
        <a href="/listing/{{$list['id']}}">
        {{$list['title']}}
        </a>
    </h2>
    <p>{{$list['desc']}}</p>
@endforeach
