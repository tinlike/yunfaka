@extends('layouts.dashboard')
@section('content')
<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">会员列表</span></nav>
    <div class="Hui-article">
        <div class="cl pd-20">
            <div class="mt-20">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                        <tr class="text-c">
                            <th>ID</th>
                            <th>用户名</th>
                            <th>手机</th>
                            <th>邮箱</th>
                            <th>注册时间</th>
                            <th>到期时间</th>
                            <th>所属代理</th>
                            <th>余额</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $item)
                        <tr class="text-c">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->expires }}</td>
                            <td>{{ $item->agency }}</td>
                            <td>{{ $item->money }}</td>
                            <td>{{ $item->status }}</td>
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