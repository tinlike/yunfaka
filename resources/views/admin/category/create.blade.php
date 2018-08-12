@extends('layouts.blank') 
@section('content')
<article class="cl pd-20">
    <form action="/admin/categories" method="post" class="form form-horizontal" id="form-member-add">
        @csrf
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="name" name="name">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>
@endsection
 @push('scripts')
<script>
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        
        $("#form-member-add").validate({
            rules:{
                name:{
                    required:true,
                    minlength:2,
                    maxlength:16
                },
                
            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
               $(form).ajaxSubmit(function(data){
                   if (data.status = 'success')
                   {
                       var index = parent.layer.getFrameIndex(window.name);
                       parent.$('.btn-refresh').click();
                       parent.layer.close(index);
                   } else {
                       alert('添加失败');
                   }
               });
               

            }
        });
    });
</script>

@endpush