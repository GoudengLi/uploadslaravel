@props(['name','type'=>'text'])
<div class="mb-6">
<x-form.label name="{{$name}}" />

@csrf
<input class="border border-grey-400 p-2 w-full"
type="{{$type}}"
name="{{$name}}"
id="{{$name}}"
{{$attributes(['value'=>old($name)])}}
>

<x-form.error name="{{$name}}"/>

</div>