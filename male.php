<?php include('includes/header.php'); ?>
<?php include('includes/mlotus.php'); ?>
<div class="main-content">
	<div id="tabs">
       <ul>
       		<li class="pain"><a style="padding:12px 21px 0 24px;" href="#tabs-1">Description</a></li>
          <li class="pain"><a style="padding:12px 21px 0 5px;" href="#tabs-2">Common Causes</a></li>

       </ul>
       <div id="tabs-1"><p>Brain tumors are masses of abnormal cells that have grown out of control. Unlike cancers that start in other parts of the body, tumors that start in damage because they can grow and spread into nearby areas, where they can destroy normal brain tissue. </p><p>With most types of cancer, a benign tumor that doesn’t invade nearby tissues or spread is rarely considered life threatening. However, both malignant and benign brain tumors can be life threatening, as a benign tumor can grow, destroy and compress normal brain tissue, causing damage that is often disabling or sometimes fatal.</p><p>The main concerns with brain tumors are how readily they spread through the rest of the brain and spinal cord and whether they can be removed and not come back.</p><p>Brain and spinal cord tumors are different in adults and children. They often form in different areas, develop from different cell types, and may have a different outlook and treatment. </p><p>It's important to know the difference between tumors that start in the brain (primary brain tumors) and tumors that start in other organs, such as the lung or breast, and then spread to the brain (metastatic or secondary brain tumors). In adults, metastatic tumors to the brain are actually more common than primary brain tumors. These cancers are not treated the same way. For example, breast or lung cancers that spread to the brain are treated differently from cancers that start in the brain.</p><p>The American Cancer Society's most recent estimates for brain and spinal cord tumors in the United States are for 2011. They include both adults and children.</p><ul><li>About 22,340 malignant tumors of the brain or spinal cord (12,260 in males and 10,080 in females) will be diagnosed. These numbers would likely be much higher if benign tumors were also included.</li><li>About 13,110 people (7,440 males and 5,670 females) will die from these tumors.</li></ul><p>Overall, the chance that a person will develop a malignant tumor of the brain or spinal cord in his or her lifetime is less than 1 percent (about 1 in 150 for a man and 1 in 185 for a woman).</p>
       	  </div>
       <div id="tabs-2"><p>Brain tumors, like most other tumors, are caused by changes in a person’sDNA. DNA is the chemical in each of our cells that makes up our genes – the instructions for how our cells function. Some genes control when our cells grow, divide and die. Certain genes that speed up cell division are called oncogenes. Others that slow down cell division, or cause cells to die at the right time, are called tumor suppressor genes. Cancer can be caused by DNA changes that turn on oncogenes and turn off tumor suppressors. These changes can be inherited from a parent or, more likely, may happen during a person’s lifetime as cells in the body divide to form two new cells. </p><p>In most cases, it is not known why people without inherited syndromes develop changes in cells of their central nervous system. Many of the risk factors that play a major role in the onset of other types of cancer do not affect the risk of brain tumors. </p><p>Researchers now understand some of the gene changes that may occur in different types of brain tumors, but it's still not clear what might cause these changes. Some may be inherited, but most brain and spinal cord tumors are not the result of known inherited syndromes. Other gene changes may just be a random event that sometimes happens inside a cell, without having an external cause. Other than radiation, there are no known lifestyle-related or environmental causes of brain tumors, so it is important to remember that there is nothing these people could have done to prevent these cancers.</p>
       </div>
	</div>

</div>
<script>
       $(document).ready(function(){
           $('.dots').click(function(){
                     var cancerSelected = $(this).attr('value')
                     
             
              
                    $.getJSON(cancerSelected+='.json',function(data){
                           var jstitle = "";
                           var jsdescription = "";
                           var jstabone = "";
                           var jstabtwo = "";

                           $.each(data, function (key, val) {
                                   jstitle += val.title,
                                   jsdescription += val.description,
                                   jstabone += val.tab_one,
                                   jstabtwo += val.tab_two

                           });
                           
                           $('#c-title').html(jstitle),
                           $('#c-description').html(jsdescription),
                           $('#tabs-1').html(jstabone),
                           $('#tabs-2').html(jstabtwo);

                    }); // getJSON
               });

       }); // ready
</script>

<?php include('includes/footer.php'); ?>