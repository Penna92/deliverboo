<template>
<div class="container-fluid secondaryColorBG">
	<div class="row py-5 justify-content-center align-items-center">


		<div class="col-lg-4 col-sm-6">
			<div>
				<img class="img-fluid mx-auto d-block" :src="myImage"   alt="">
			</div><!-- /lc-block -->
		</div><!-- /col -->
		<div class="col-lg-4 offset-lg-1">
			<div class="lc-block my-5">
				<div>
					<h2 class=" text-white font-weight-bold text-center font" style="font-size:5rem" >I piatti che AMIŒ a domiciliœ!!!</h2>
				</div>
			</div>
			
			
		</div><!-- /col -->
	</div>
</div>

    <!-- <div class="container-slogan">
        <div id="bottom">
            <div id="left">
                <h1>i piatti che ami a domicilio</h1>
            </div>
            <div id="right">
                <img src="https://cdn.discordapp.com/attachments/941312490950766592/996357413194170438/campaign.df58721f.png">
            </div>
        </div>
    </div> -->
</template>
<script>
export default {
    name: 'SloganComponent',
	  data() {
    return { 
      myImage: "/media/img/banner.png",

    }
  }

}
</script>
<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

img{
	width: 80%;
	height: 80%;
}

.font {
	font-family: 'Acme', sans-serif;
}

</style>
