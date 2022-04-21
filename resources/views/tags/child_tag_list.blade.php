<?php
$child_tags = \App\Models\Tag::where('parent', $tag->id)->get();
?>
@forelse($child_tags as $child_tag)
    <tr> 
    <th scope="row">{{ $child_tag->id }}</th>
    <td>
    <a href="{{url('/category/' . $child_tag->name)}}">
    {{ '-- '.str_limit($child_tag->title, 35) }}
    </a>
    </td>
    <td><div class="cat-bx {{ $child_tag->color}}"></div> {{ $child_tag->name }}</td>
    <td><a href="{{ url('/cats/' . $child_tag->id . '/edit') }}">@lang('admin.edit')</a></td>
    <td><a class="color-delete" href="{{ url('/cats/' . $child_tag->id) }}">@lang('admin.delete')</a></td>
    </tr>
@empty
            
@endforelse