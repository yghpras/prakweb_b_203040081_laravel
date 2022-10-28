@extends('layouts.main')

@section('Container')

    <h2>{{ $post->title }}</h2>

    <p>By. Yoghi Prasetiyo in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

    {!! $post->body !!}


    <a href="/blog">Back To Post</a>

@endsection






{{-- Post::create([
    'title' => 'Judul Ke Tiga',
    'category_id' => 3,
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum ke tiga',
    'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Iure aliquid a, repellat nostrum necessitatibus veniam autem consequuntur tempore neque numquam labore reiciendis! Ex eveniet sit sequi accusamus ullam minus. Vero fuga deleniti aperiam temporibus! Commodi sequi possimus quaerat nemo iste magni, ipsam laboriosam odio optio, at obcaecati doloremque quam laborum.</p><p> Numquam, unde dolore eos placeat, dignissimos adipisci beatae doloribus rerum tempore esse omnis ratione ullam possimus sed veritatis, vel deserunt quo ex nemo praesentium. Suscipit voluptatibus dignissimos sit temporibus odit inventore molestiae rerum doloremque ipsa harum.</p><p> A ipsam nulla aut velit voluptate quasi vitae minus quae vel, ipsa fugiat, repudiandae, obcaecati similique? Consectetur harum optio minus! Distinctio placeat pariatur voluptates neque porro mollitia doloribus quos, praesentium delectus, culpa ipsam cum consequatur rerum recusandae veniam? Illo inventore explicabo facere impedit exercitationem, molestias vero perspiciatis alias, assumenda fugit similique, nobis aperiam totam necessitatibus obcaecati consequuntur corporis repudiandae provident ratione? Eum, vel asperiores. Cupiditate, repellat ea blanditiis aspernatur deserunt atque vel pariatur explicabo nobis perspiciatis fugit magni magnam laborum eius suscipit in illo laboriosam, reiciendis dolorum. Repudiandae ab magni vel accusamus sit! Voluptate error vitae inventore accusantium doloribus magnam? Quod optio repellat quasi excepturi architecto exercitationem, dolorem placeat saepe eaque veritatis sunt magni nisi provident eos voluptatibus doloribus, ratione omnis et perspiciatis enim maiores blanditiis recusandae in soluta? Nesciunt in incidunt ipsam non quam, molestiae numquam voluptate odit consequatur eos illo at deleniti voluptatum eaque perspiciatis autem sunt itaque? Eos at, sint odit dolore voluptatem adipisci ipsa nesciunt provident dolores facilis expedita quidem repellendus incidunt accusamus! Fugit repellendus suscipit deleniti minus, dicta quia quisquam sunt voluptatem earum, unde provident facilis nihil asperiores. Eos at et minima odio vitae beatae aut tempore nisi nemo itaque quisquam, ratione, ipsam laborum. Nesciunt quia veritatis voluptatum, fugiat alias est eaque maiores itaque? Magnam quisquam ad, asperiores libero suscipit doloribus obcaecati quis beatae consequuntur pariatur, qui dolor? Tenetur quidem saepe obcaecati facilis porro ipsum incidunt natus. In hic vel beatae incidunt sit quasi alias porro dicta consequuntur eveniet doloremque aliquam ab, eligendi iure possimus culpa explicabo accusamus neque esse saepe dolorum nihil. Fugiat unde blanditiis explicabo omnis cumque quis incidunt expedita adipisci accusamus voluptate libero, ullam sequi quam dignissimos eos ad officia, vero asperiores deleniti nobis minus. Quibusdam tempora ratione amet reprehenderit magnam, totam accusamus in iure expedita perferendis. Ratione, animi cum rem consectetur autem amet quaerat quae blanditiis consequatur dolorem dolores facere laudantium velit, minima aspernatur totam?</p>'
]) --}}


