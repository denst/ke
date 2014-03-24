<?php get_header();?>
<!--==============================content================================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
        <div class="main">
                <div class="content-padding-2">
                        <div class="container_12">
                                <div class="wrapper">
                                        <article class="grid_8">
                                                <div class="padding-grid-1">
                                                        <h3>Contact <strong>Form</strong></h3>
                                                        <form id="contact-form" enctype="multipart/form-data" method="post" >
                                                                <fieldset>
                                                                        <label>
                                                                                <span class="name-input">Name:</span>
                                                                                <input name="name" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                                                                        </label>
                                                                        <label>
                                                                                <span class="name-input">Email:</span>	
                                                                                <input name="name1" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
                                                                        </label>
                                                                        <label>
                                                                                <span class="name-input">Message:</span>
                                                                                <textarea onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"></textarea>
                                                                        </label>						
                                                                </fieldset>
                                                                <div class="link-form">
                                                                        <a class="link link-margin" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                                                        <a class="link" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                                                </div> 
                                                                <div class="clear"></div>		
                                                        </form>	
                                                </div>
                                        </article>
                                        	
                                </div>
                        </div>
                </div>
        </div>
        <div class="block"></div>
</section>
</div>
<?php get_footer();?>