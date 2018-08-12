@extends('layouts.dashboard')
@section('content')
<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">产品分类</span></nav>
    <div class="Hui-article">
        <div class="cl pd-20">

            <div class="cl pd-5 bg-1 bk-gray mt-20">
                <span class="l">
                     <a href="javascript:;" onclick="member_add('添加分类','categories/create','340','200')" class="btn btn-primary radius"><i class="Hui-iconfont"></i> 添加分类</a>
                </span>
                <span class="r">共有数据：<strong>88</strong> 条</span>
            </div>

            <div class="mt-20">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                        <tr class="text-c">
                            <th width="80">ID</th>
                            <th width="100">分类名称</th>
                            <th width="100">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $item)
                        <tr class="text-c">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td class="td-manage">
                                <a title="编辑" href="javascript:;" onclick="member_edit('编辑','categories/create','{{ $item->id }}','340','200')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                                <a title="删除" href="javascript:;" onclick="member_del(this,'{{ $item->id }}')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="{{ asset('lib/laypage/1.2/laypage.js') }}"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/*添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            'url': '/admin/categories/' + id,
            'method': 'delete'
        });
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>
@endpush