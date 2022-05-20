{{-- Vanilla PHP --}}
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['desc']; ?></p>

{{-- Blade Syntax --}}
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['desc']}}</p>
