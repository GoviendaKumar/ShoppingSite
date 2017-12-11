function CommentVal()
{
  var form=document.comments;
      

	if(form.comment.value=="")
	{
			form.comment.focus();
			return false;
	}
	else
	{
			return true;
	}
	return true;
}// JavaScript Document