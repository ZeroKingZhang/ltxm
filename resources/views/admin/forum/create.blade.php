@extends('admin.layout.index')


@section('content')
<div class="panel">

        <div class="panel-heading">
			<h3 class="panel-title">版块添加</h3>
		</div>
                <form action="/admin/forum" method="post" id="myform" name="myform" enctype="multipart/form-data">
                	{{ csrf_field() }}
		
		        @if (count($errors) > 0                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            )
	    <div class="alert alert-danger alert-dismissible">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	    @endif
                   <div class="panel-body" style="width:500px;height:600px;margin:0px auto;">
                      	<label>版块分类：</label>
                                <select name="pid" id="catid" class="required">
                                    <option value="0">顶级版块</option>
                                    @foreach ($cates  as $k=>$v) 
                                    <?php
                                        $n=substr_count($v->path,',')-1;   //数逗号个数
                                    ?>
                                     <option value="{{$v->forum_id}}">{{str_repeat('&nbsp;',$n*5)}}|--{{$v->forum_name}}</option>   
                                    @endforeach
                                </select>
                                <br>
                           
                       
                       
                               <label>版块名称：</label>
				<input type="text"  class="form-control" name="forum_name" value="" placeholder="请输入版块名称" style="width:400px">
				<br>
				<label>版块图片：</label>
			<input type="file"  class="form-control" name="forum_pic" value= "" style="width:400px">
			<br>
            <input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">            
                            
   </div>
           </form>
           
        </div>

   
@endsection