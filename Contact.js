var express=require('express');
app=express();
app.use(express.static(_dirname));
app.get('',function(){
	res.sendFile(__dirname+'Contact.html');
});
app.listen(8200,function(){
	console.log("hello");
})