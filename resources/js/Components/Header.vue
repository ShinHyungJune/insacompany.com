<template>
    <header id="header">
        <div class="header-wrap sitemap">
            <div class="top-menu">
                <ul class="top-menu-sns">
                    <li class="sns-icons">
                        <a href="https://www.instagram.com/insa.official_" target="_blank"><img class="sns-icon insta-off" src="/images/sns-icon-insta%20(1).svg" /></a>
                        <a href="https://www.instagram.com/insa.official_" target="_blank"><img class="sns-icon insta-on" src="/images/sns-icon-insta-on.svg" /></a>
                    </li>
                    <li>
                        <a href="http://pf.kakao.com/_kvwsxj" target="_blank"> <i class="sns-icon speech xi-speech"></i></a>
                    </li>
                    <li>
                        <a href="https://blog.naver.com/insa_official" target="_blank"> <i class="sns-icon naver xi-naver"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/insa_official" target="_blank"> <i class="sns-icon youtube xi-youtube-play"></i></a>
                    </li>
                </ul>
                <h1 class="logo">
                    <a href="/"></a>
                </h1>
                <div class="top-login" v-if="!$page.props.user">
                    <ul>
                        <li><a href="/login">Log in</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </div>
                <div class="top-login" v-else>
                    <ul>
                        <li><a href="/logout">Logout</a></li>
                        <li><a href="/datings" :class="$page.props.user && $page.props.user.data.alarm ? 'point' : ''">Mypage</a></li>
                    </ul>
                </div>
                <div class="menu-bar">
                    <button class="mb-hd-open"><img src="/images/m-bar.png" alt=""></button>
                </div>
            </div>
        </div>
        <nav class="gnb-wrap">
            <ul class="gnb">
                <li class="active">
                    <a href="/story">??????</a>
                    <!-- <div class="subA"> -->
                    <ul class="gnb-sub a">
                        <li>
                            <a href="/story">????????????</a>
                        </li>
                    </ul>
                    <!-- </div> -->
                </li>
                <li>
                    <a href="/partyProducts">?????????</a>
                    <ul class="gnb-sub b">
                        <li><a href="/partyProducts">????????????</a></li>
                        <li><a href="/datingProducts">???????????????</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/datingReviews">??????</a>
                    <ul class="gnb-sub c">
                        <li><a href="/datingReviews">????????? ??????</a></li>
                        <li><a href="/partyReviews">?????? ??????</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/commentNotices">?????????</a>
                    <ul class="gnb-sub d">
                        <li><a href="/commentNotices">????????? ?????????</a></li>
                        <li><a href="/partyNotices">??????Q&A</a></li>
                        <li><a href="/datingNotices">?????????Q&A</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="mb-hd mb">
            <div class="mb-hd-wrap ">
                <div class="mb-hd-box">
                    <div class="mb-logo">
                        <img src="/images/LOGO.png" alt="insa-logo">
                    </div>
                    <div class="mb-login" v-if="!$page.props.user">
                        <a href="/login">login</a>
                        <a href="/datings">mypage</a>
                        <a href="/register">sign in</a>
                    </div>
                    <div class="mb-login" v-else>
                        <a href="/logout">logout</a>
                        <a href="/datings">mypage</a>
                    </div>
                    <ul class="mb-nav">
                        <li>
                            <div class="mb-sm-nav-top">
                                <a href="/story">??????</a>
                                <i class="xi-angle-down"></i>
                            </div>
                            <div class="mb-sm-nav" style="display: none;">
                                <a href="/story">?????? ??????</a>
                            </div>
                        </li>
                        <li>
                            <div class="mb-sm-nav-top">
                                <a href="/partyProducts">?????????</a>
                                <i class="xi-angle-down"></i>
                            </div>
                            <div class="mb-sm-nav">
                                <a href="/partyProducts">?????? ??????</a>
                                <a href="/datingProducts">????????? ??????</a>
                            </div>
                        </li>
                        <li>
                            <div class="mb-sm-nav-top">
                                <a href="/datingReviews">??????</a>
                                <i class="xi-angle-down"></i>
                            </div>
                            <div class="mb-sm-nav">
                                <a href="/datingReviews">????????? ??????</a>
                                <a href="/partyReviews">?????? ??????</a>
                            </div>
                        </li>
                        <li>
                            <div class="mb-sm-nav-top">
                                <a href="/commentNotices">?????????</a>
                                <i class="xi-angle-down"></i>
                            </div>
                            <div class="mb-sm-nav">
                                <a href="/commentNotices">????????? ?????????</a>
                                <a href="/partyNotices">????????????</a>
                                <a href="/datingNotices">???????????????</a>
                            </div>
                        </li>
                    </ul>
                    <div class="sns-wrap-mb">
                        <a href="/logout" class="logout-btn">logout<i class="xi-log-out" v-if="$page.props.user"></i></a>
                        <a href="#"> <i class="utb youtube xi-youtube-play"></i></a>
                        <a href="#"> <i class="kakao speech xi-speech"></i></a>
                        <a href="#"> <i class="sns-icon naver xi-naver"></i></a>
                    </div>
                    <button class="close-btn">
                        <i class="xi-close"></i>
                    </button>
                </div>
            </div>
            <div class="chat-fixed mb">
                <a href="http://pf.kakao.com/_kvwsxj"> <i class="xi-speech"></i></a>
            </div>
        </div>
    </header>

</template>
<script>
import {Link} from '@inertiajs/inertia-vue';
export default {
    components: {Link},
    data(){
        return {
            pathname: location.pathname,

            user: this.$page.props.user ? this.$page.props.user.data : "",
            form: this.$inertia.form({
                word: ""
            }),
        }
    },
    methods: {
        search(){

        },

        init(){
            $(function () {
                $(".menu-bar").click(function () {
                    if($(".mb-hd-wrap").hasClass("open") === true){
                        $(".mb-hd-wrap").removeClass("open");
                        $(".nav-wrap").addClass("open");
                        $(".close-btn").click(function () {
                            $(".nav-wrap").removeClass("open");
                        });
                    }else{
                        $(".nav-wrap").removeClass("open");
                        $(".mb-hd-wrap").addClass("open");
                        $(".close-btn").click(function () {
                            $(".mb-hd-wrap").removeClass("open");
                        });
                    }
                });
            });

            $(function () {
                let $sm_nav_top = $(".mb-sm-nav-top");
                $sm_nav_top.click(function () {
                    $(this).siblings(".mb-sm-nav").slideToggle();
                    $(this).toggleClass("active");
                });
            });
        }
    },
    computed: {

    },

    mounted() {
        this.init();

        this.$inertia.on("start", () => {
            this.pathname = location.pathname;
        });

    }
}
</script>
