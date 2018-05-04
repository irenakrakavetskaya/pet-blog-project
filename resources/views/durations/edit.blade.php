@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Duration
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($duration, ['route' => ['durations.update', $duration->id], 'method' => 'patch']) !!}

                        @include('durations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection