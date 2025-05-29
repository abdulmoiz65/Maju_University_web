<div class="conatiner-fluid">
    <div  class="container">
        <div style="padding-top: 100px; padding-bottom: 100px;" class="text">
            <h1 class="text-heading">VALUES OF MOHAMMAD ALI JINNAH UNIVERSITY</h1>
            <p>We aim to transform and inspire the world through our passion for education, research and innovation. Join us on the fascinating adventure to learn, live and be inspired</p>
        </div>
        <?php
        include("./components/values/valuecard.php");
        creteValueCard('./public/pictures/learn.jpg', 'LIVE', 'We encourage people to pursue their dreams as a way of life.
        We use technology to promote education in a way that humanises learning.
        We use cutting-edge pedagogy to create learning experiences that are as fluid as our reality. ');
        creteValueCard('./public/pictures/live.jpg', 'LEARN', 'We live in a complex world with dynamically interwoven physical, ecological, and digital surroundings, and we make an effect by providing transformational educational experiences that inspire and grow a worldwide community of change-makers. ');
        creteValueCard('./public/pictures/inspire.jpg', 'BE INSPIRED', 'We encourage our people to constantly question and move beyond established wisdom in order to push the frontiers of what is known.
        We promote research as an important method for gaining information and understanding.
        We want our professors to be academic entrepreneurs who want to make a difference in the world. ');
        ?>
    </div>
</div>