<!DOCTYPE html>
<html>
   <head>
   	<style>
   		.mary {
   			width: 100%;
   		}
         .team-flex {
            display: flex;
            width: 50%;
            margin: auto;
            flex-direction: row;
         }

         .team-flex div, .team-flex .img {
            flex: 33.33%;
            padding: 5px;
         }

         h1 {
            text-align: center;
            color: #2d95df;
            font-size: 50px;
         }

         .box-50 {
            width: 50%;
            text-align: left;
            margin: auto;
         }

         h3 {
            font-size: 22px !important;
            margin-bottom: 0px;
         }

         p {
            font-size: 18px;
            line-height: 1.75em;
         }

         .box-50 p {
            margin-top: 0px;
         }

         @media screen and (max-width: 600px) {
            .team-flex div, .team-flex .img {
               flex: 100%;
            }

            .team-flex {
               width: 100%;
               flex-direction: column;
            }

            .box-50 {
               width: 100%;
            }

            .box-padding {
               padding: 0px 5px;
            }
         }
   	</style>
   </head>
   <body>
      
         <?php include 'header.php';?>
         <h1>MEET THE TEAM</h1>
         <div class="team-flex">
            <div class="img">
               <img src="images/mary.jpg" class="mary">
            </div>
            <div>
               <h3>Mary Ingerton is providing level 2 Support Coordination and level 3 Specialist Support Coordination services to participants who live in central and eastern suburbs of Brisbane.</h3>
               <p>Mary has over 20 years’ experience in the human services field across the community, government, and private sectors.  Having worn many hats in her career, Mary has worked directly with families and people with disability to support them to live their best lives, lead teams across a number of human service sectors, and managed business operations and growth.<br><br>
               Mary has specialised in the ability to navigate complex challenges and work with a range of multidisciplinary teams to achieve great outcomes for people with disability.  Mary’s professional values lie in:<br>
               - Building strong and collaborative working relationships<br>
               - Leading and engaging people and teams through times of significant change<br>
               - Identifying and pursuing creative opportunities<br>
               - Delivering solution focused outcomes</p>
            </div>
         </div>
         <hr style="margin-bottom: 30px;">
         <div class="box-50">
            <div class="box-padding">
               <h3>Cathy Erbacher is providing level 2 Support Coordination and level 3 Specialist Support Coordination services to participants who live in the northern suburbs of Brisbane through Moreton Bay through to Caloundra.</h3>
               <p>Cathy has experience in government and the community sectors working with children and adults in various contexts. Initially Cathy assisted people to contribute to their community by pursuing valued roles within their chosen interests in local art and community groups, bushwalking clubs, sporting clubs, and service clubs.  Cathy believes in community inclusion, and in building community around people, and has taken this passion into various roles in Disability Services.  She drew upon this philosophy when working in both behaviour support and service co-ordination roles to transition individuals from institutions into their own homes in the community.<br>

               Cathy then worked for Disability Services (Queensland) for 25 years in roles that spanned across therapeutic and strengths-based case management, positive behaviour support, family support, staff training and team leadership. <br>

               Cathy has a strong human rights framework, is flexible and creative, and works with the mantra of Whatever It Takes.  Cathy is focussed on achieving meaningful and responsive outcomes.  She has extensive experience in assisting people from diverse groups, including ATSI and CALD backgrounds, and identifying as LGBTIQA+.</p>

               <h3>Jade Gardiner provides level 2 Support Coordination and level 3 Specialist Support Coordination services to participants who live on the Sunshine Coast from Caloundra to Noosa.</h3>
               <p>Jade has a unique history having played rugby semi-professionally in New Zealand whilst studying physiology (?) and personal fitness.  After his football playing days Jade became a personal trainer and opened his own gym.  During this time Jade worked with many people who had a disability or who were recovering from a significant or life changing injury.<br>

               As his interests expanded from how people move to why people do the things they do, Jade turned his attention to matters of the mind and obtained a psychology degree as a mature aged student.<br>

               Jade’s background in working for people with a disability or in rehab in the gym, coupled with the skills required to own and operate a successful business has provided him with a great foundation for his role as support coordinator.</p>

               <h3>Natalie Love provides level 2 Support Coordination and level 3 Specialist Support Coordination services to participants who live on the Sunshine Coast from Caloundra to Noosa.</h3>
               <p>Natalie has a Masters in Social Work and has extensive experience working in the disability, child safety and justice systems - having worked as a Specialist Support Coordinator with two community organisations in the past 2 years.<br>

               Natalie has worked for government, in private practice, academia and for NGOs; she has a wealth of experience in the human services sector and brings a strong client focussed, human rights based framework. <br>

               Natalie has worked with children and adults with ASD, anxiety and trauma background and has worked with people who have had substance use issues.  <br>

               Natalie has supervised students training in Equine Assisted Psychotherapy and is an animal lover with two cats and a dog.</p>

               <h3>Jaimie Levy provides level 2 Support Coordination and level 3 Specialist Support Coordination services to participants who live on the Sunshine Coast from Caloundra to Noosa.</h3>
               <p>Jaimie has a background in training and mental health peer work prior to becoming a Support Coordinator on the Sunshine Coast two years ago.  Her formal training includes Youth Work and Social Services and she is an accredited Intentional Peer Support Trainer.<br>

               Jaimie started working with Sunshine Specialist Supports in July 2021 and has impressed with her participant centred approach and a calm demeanour when working on some highly complex matters.  <br> 

               Jaimie has a strong work ethic; with a methodical approach to her work and a great eye for detail.  She brings with her a thorough understanding of diverse communities and has a strong desire to promote inclusiveness through her work practices.<br>

               Jaimie enjoys an eclectic array of music including “lush low-fi” and 90’s grunge; enjoys reading a really good character-based saga (think Boy Eats Universe) and isn’t shy in the kitchen.</p>

               <h3>Melanie (Mel) McVie provides level 2 Support Coordination and level 3 Specialist Support Coordination services to participants who live on the Sunshine Coast from Maroochydore to Gympie.</h3>
               <p>Mel has over 25 years’ experience working across various roles in the Human Services sector; this includes working in direct client services, as well as program and policy areas across multiple government and non-government agencies .  Mel prides herself on being unequivocally client focused, with exceptional communication, problem solving and conflict resolution skills.<br>

               Mel’s strengths lie with her assisting and co-learning with participants; facilitating their involvement in planning, problem solving and resource identification to assist them in the areas of their lives they find most challenging.<br>

               Mel has extensive experience helping people who identify as having: physical disabilities from birth or later in life, cognitive, sensory and mental health challenges, and those who identify as being neurodiverse.

               </p>
            </div>
         </div>
            
            <div class="grey-box-2" id="contact-us">
            	<div class="grey-container-x">
               <div>
                  <img src="images/Contact-details-2022.webp">
               </div>
               <div>
                  <img src="images/hands.webp">
               </div>
             </div>
            </div>
            <hr style="border: 1px solid #000; width: 100%;">
            <div class="flexbox">
               <div>
                  <img src="images/TAG-Registered-Provider.jpg">
               </div>
               <div>
                  <img src="images/i-love-ndis.webp" class="love-ndis">
               </div>
            </div>
            <p style="font-size: 16px; text-align: center;" class="bottom-text">©2019 by Sunshine Specialist Supports.</p>
            
         </div>
      
    <div class="bg-image">
       <div class="white-box">
          <img src="images/live-logo.png" class="logo"><br>
          <span>0412 080 494</span>
       </div>
    </div>
   </body>
</html>