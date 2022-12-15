<div class="center">
<div class="flex justify-center mt-10">
<div class="border border-black w-[800px]">
<h1 class="text-center text-3xl m-5">Send Us A Message</h1>
<form method="POST" action="/sendemail/send" class="p-3">
@csrf
<div class="border p-2">
<p>To</p>
</div>
<div class="flex">
<input name="email" type="email" class="border p-2 w-[400px]" placeholder="email">
</div>
<div class="border p-2 mt-2">
<p>Subject</p>
</div>
<input name="subject" type="text" class="border p-2 min-w-full" placeholder="subject">
<div class="border p-2 mt-2">

<p>MESSAGE</p>
</div>
<textarea id="message" name="message" rows="4" cols="50"></textarea>

<div class="flex justify-center">
<input type="submit" name="send" class="btn btn-info" value="Send"></input>
</div>

</form>
</div>
</div>
</div>

