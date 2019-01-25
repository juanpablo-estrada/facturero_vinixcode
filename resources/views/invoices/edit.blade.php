@extends('layouts.master')

@section('content')
    <div id="invoice">
        <div class="panel panel-default" v-clock>
            <div class="panel-heading">
                <div class="clearfix div-create">
                    <span class="panel-title">Update Invoice</span>
                    <a href="{{route('invoices.index')}}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
            <div class="panel-body">
                @include('invoices.form')
            </div>
            <div class="panel-footer div-create">
                <a href="{{route('invoices.index')}}" class="btn btn-danger">Cancel</a>
                <a href="{{route('invoices.index')}}" class="btn btn-success" @click="update" :disabled="isProcessing">Update</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/vue.min.js"></script>
    <script src="/js/vue-resource.min.js"></script>
    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';

        window._form = {!! $invoice->toJson() !!};
    </script>
    <script src="/js/app.js"></script>
@endpush