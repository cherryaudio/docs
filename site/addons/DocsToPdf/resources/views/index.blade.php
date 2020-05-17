@extends('layout')

@section('content')
<style>
    .ca-form-control {
        box-shadow: 0 0 0 1px rgba(50, 50, 93, .1),
            0 2px 5px 0 rgba(50, 50, 93, .08),
            0 1px 1.5px 0 rgba(0, 0, 0, .07),
            0 1px 2px 0 rgba(0, 0, 0, .08),
            0 0 0 0 transparent;
        opacity: 1;
        position: relative;
        border: 1px solid #efefef;
        border-radius: 4px;
        padding: 4px;
        width: 100%;
    }

    .ca-form-label {
        font-weight: 500;
        margin-bottom: 8px;
    }

    .ca-help {
        font-weight: 300;
        font-size: 12px;
        margin: 8px 0;
        display: block;
    }

    .ca-mb-8 {
        margin-bottom: 2rem;
    }
</style>

<div class="flex items-center mb-3">
    <h1 class="flex-1">{{ $title }}</h1>
</div>
<div class="card">
    <form action="/cp/addons/docs-to-pdf/dashboard" method="post">
        {{ csrf_field() }}
        <div class="ca-mb-8">
            <label class="block ca-form-label">Name of File</label>
            <input class="ca-form-control" name="name" placeholder="Voltage Modular User Guide or Voltage Modular Designer Documentation">
        </div>
        <div>
            <label class="block ca-form-label">Select Page Folders</label>
            <select class="ca-form-control" multiple name="pages[]">
                @foreach($pages as $id => $page)
                <option value="{{ $id }}">{{ $page }}</option>
                @endforeach
            </select>
            <span class="ca-help">Use option or control to select multiple</span>
        </div>
        <div>
            <label class="block ca-form-label">Themes</label>
            <select class="ca-form-control" multiple name="themes[]">
                @foreach($themes as $id => $theme)
                <option value="{{ $id }}">{{ $theme }}</option>
                @endforeach
            </select>
            <span class="ca-help">Use option or control to select multiple</span>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>
</div>
@endsection