<template>
    <main class="loginpage login">
        <div class="login-container main-login">
            <div class="login-header">
                <img src="/images/login-logo.png" alt="login-logo" class="login-logo">
                <p class="login-header-title"><span class="text-style-1">인</span>생에서 가장 중요한 것은 <span class="text-style-1">사</span>랑이다.</p>
                <img src="/images//log-line.png" alt="log-line">
                <p class="login-header-sub">
                    가장 친한 친구가 되어 찾아 줄게요
                    <br />
                    인사 하세요!
                </p>
            </div>
        </div>
        <div class="join-wrap">
            <div class="m-empty type01" style="margin:40px 0; padding:100px; background-color:#ccc; color:#fff; font-size:24px; font-weight:bold;">
                본인인증 모듈 심사대기
            </div>
<!--            <div class="form-wrap form-join">
                <div class="con-wrap-header">
                    <p class="con-wrap-title">일반 회원가입</p>
                    <p class="con-wrap-sub">* 필수입력 </p>
                </div>

                <form action="">
                    <div class="con-wrap">
                        <ul class="form-box row-group">
                            <li class="row-group">
                                <p class="default">
                                    이메일 <span>*</span>
                                </p>
                                <div class="user">
                                    <input type="text" placeholder="이메일 (이메일은 아이디로 사용됩니다)">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    비밀번호 <span>*</span>
                                </p>
                                <div class="user">
                                    <input class="input-gap" type="text" placeholder="비밀 번호">
                                    <input type="text" placeholder="비밀번호 재확인">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    본인인증 <span>*</span>
                                </p>
                                <div class="user col-group ">
                                    <input type="text" placeholder="휴대폰 번호를 입력하세요(-없이 숫자만)">
                                    <button type="button" class="form-btn">
                                        인증하기
                                    </button>
                                </div>

                            </li>
                            <li class="row-group">
                                <p class="default">
                                    이름(실명) <span>*</span>
                                </p>
                                <div class="user">
                                    <input type="text" placeholder="홍길동">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    생년월일 <span>*</span>
                                </p>
                                <div class="user">
                                    <input type="text" placeholder="1999/01/01">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    성별 <span>*</span>
                                </p>
                                <div class="user">
                                    <input type="text" placeholder="남자">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    직업 <span>*</span>
                                </p>
                                <div id="theme">
                                    <div class="select-close"></div>

                                    <div class="join-select">
                                        <div class="text">직업을 선택해주세요.
                                            <i class="xi-caret-down-min"></i>
                                        </div>
                                        <ul class="option-list">
                                            <li class="option">서비스 및 영업</li>
                                            <li class="option">사무직</li>
                                            <li class="option">금융직</li>
                                            <li class="option">연구원/엔지니어</li>
                                            <li class="option">건축/설계</li>
                                            <li class="option">간호 및 의료사</li>
                                            <li class="option">디자이너</li>
                                            <li class="option">언론인</li>
                                            <li class="option">교사 및 강사</li>
                                            <li class="option">공무원 및 공공기관</li>
                                            <li class="option">의사(한의,치의)/약사</li>
                                            <li class="option">회계사</li>
                                            <li class="option">기타 전문직</li>
                                            <li class="option">변호사 및 법조인</li>
                                            <li class="option">자영업 및 사업</li>
                                            <li class="option">프리랜서</li>
                                            <li class="option">승무원 및 항공 관련 직업</li>
                                            <li class="option">대학생/대학원생(석박사)</li>
                                            <li class="option">방송 관련 직업</li>
                                            <li class="option">인플루언서</li>
                                            <li class="option">기타</li>
                                        </ul>
                                    </div>
                                </div>

                                &lt;!&ndash;  셀렉트 &ndash;&gt;
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    최종 학력 <span>*</span>
                                </p>
                                <div id="theme">
                                    <div class="join-select">
                                        <div class="text">최종 학력을 선택해주세요.
                                            <i class="xi-caret-down-min"></i>
                                        </div>
                                        <ul class="option-list">
                                            <li class="option">고졸 (취업한 경우 가능)</li>
                                            <li class="option">2년제 대졸</li>
                                            <li class="option">4년데 대졸</li>
                                            <li class="option">석사 졸업</li>
                                            <li class="option">박사 졸업</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    거주지 <span>*</span>
                                </p>
                                <div class="user col-group">

                                    <div id="theme">
                                        <div class="join-select">
                                            <div class="text">시/도를 선택해 주세요
                                                <i class="xi-caret-down-min"></i>
                                            </div>
                                            <ul class="option-list half">
                                                <li class="option">서울</li>
                                                <li class="option">인천</li>
                                                <li class="option">경기</li>
                                                <li class="option">경북</li>
                                                <li class="option">경남</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="theme">
                                        <div class="join-select">
                                            <div class="text">구/군을 선택해 주세요
                                                <i class="xi-caret-down-min"></i>
                                            </div>
                                            <ul class="option-list half">
                                                <li class="option">종로구</li>
                                                <li class="option">중구</li>
                                                <li class="option">용산구</li>
                                                <li class="option">성동구</li>
                                                <li class="option">경남</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    이용 예정 서비스 <span>*</span>
                                </p>
                                <div class="user">
                                    <input type="text" value="소개팅 or 파티">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    가입 경로 <span>*</span>
                                </p>
                                <div id="theme">
                                    <div class="join-select">
                                        <div class="text">가입 경로를 선택해 주세요
                                            <i class="xi-caret-down-min"></i>
                                        </div>
                                        <ul class="option-list">
                                            <li class="option">네이버 블로그</li>
                                            <li class="option">네이버 광고</li>
                                            <li class="option">지인추천</li>
                                            <li class="option">검색</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="notice-box">
                            <p>
                                <span class="text-style-1">소개팅 서비스</span> 이용을 원하신다면 <br>
                                아래의 <span class="text-style-1">선택입력사항</span>을 모두 입력해주세요
                            </p>
                        </div>
                        <ul class="form-box row-group">
                            <li class="row-group">
                                <p class="default">
                                    근무지
                                </p>
                                <div class="user col-group">

                                    <div id="theme">
                                        <div class="join-select">
                                            <div class="text">시/도를 선택해 주세요
                                                <i class="xi-caret-down-min"></i>
                                            </div>
                                            <ul class="option-list half">
                                                <li class="option">서울</li>
                                                <li class="option">인천</li>
                                                <li class="option">경기</li>
                                                <li class="option">경북</li>
                                                <li class="option">경남</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="theme">
                                        <div class="join-select">
                                            <div class="text">구/군을 선택해 주세요
                                                <i class="xi-caret-down-min"></i>
                                            </div>
                                            <ul class="option-list half">
                                                <li class="option">종로구</li>
                                                <li class="option">중구</li>
                                                <li class="option">용산구</li>
                                                <li class="option">성동구</li>
                                                <li class="option">경남</li>
                                            </ul>
                                        </div>
                                    </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    키/몸무게
                                </p>
                                <div class="user">
                                    <input type="text" placeholder="키와 몸무게를 입력해주세요">
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    인스타그램 아이디
                                </p>
                                <div class="user">
                                    <input type="text" placeholder="인스타그램 아이디를 입력해 주세요">
                                </div>
                            </li>
                            <li class="row-group file">
                                <p class="default">
                                    프로필 사진 (최소 3장)
                                </p>
                                <div class="user">
                                    <label for="thumbnail_file">파일 첨부</label>
                                    <input type="file" id="thumbnail_file" onchange="file_change('thumbnail');" multiple="" accept="image/*">
                                    <div class="file-upload-list">
                                        <ul id="thumbnail_ul"></ul>
                                    </div>
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    이상형
                                </p>
                                <div class="user">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="본인의 이상형에 대해 구체적으로 입력해 주세요."></textarea>
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    자기소개글
                                </p>
                                <div class="user">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="자신을 소개할 수 있는 간단한 자기소개를 입력해 주세요."></textarea>
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    매니저에게 한마디
                                </p>
                                <div class="user">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="매니저에게 전하고 싶은 한마디를 입력해 주세요."></textarea>
                                </div>
                            </li>
                            <li class="row-group">
                                <p class="default">
                                    결혼여부
                                </p>
                                <div id="theme">
                                    <div class="join-select">
                                        <div class="text">혼인이력을 선택해 주세요
                                            <i class="xi-caret-down-min"></i>
                                        </div>
                                        <ul class="option-list">
                                            <li class="option">초혼</li>
                                            <li class="option">재혼</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="row-group">
                                <div class="terms">
                                    <p class="default">
                                        약관동의
                                    </p>
                                    <div class="all-check-contents">
                                        <label for="join_agree">
                                            <input type="checkbox" id="join_agree">
                                            <span class="check-icon"></span>
                                            전체 동의
                                        </label>
                                    </div>
                                </div>
                                &lt;!&ndash;  &ndash;&gt;
                                <ul class="row-group terms-list">
                                    <li class="row-group terms-1">
                                        <div class="terms-agree">
                                            <label for="check1">
                                                <input type="checkbox" id="check1">
                                                <span class="check-icon"></span>
                                                이용약관 동의(필수)
                                            </label>
                                        </div>
                                        <a href="완료/privacy02.html" target="_blank"><i class="xi-angle-right"></i></a>
                                    </li>
                                    <li class="row-group  terms-1">
                                        <div class="terms-agree">
                                            <label for="check2">
                                                <input type="checkbox" id="check2">
                                                <span class="check-icon"></span>
                                                개인정보 수집 및 이용에 대한 동의 (필수)
                                            </label>
                                        </div>
                                        <a href="완료/privacy01.html" target="_blank"><i class="xi-angle-right"></i></a>
                                    </li>
                                    <li class="row-group  terms-1">
                                        <div class="terms-agree">
                                            <label for="check3">
                                                <input type="checkbox" id="check3">
                                                <span class="check-icon"></span>
                                                광고 및 마케팅 활용 동의 (선택)
                                            </label>
                                        </div>
                                        <a href="완료/privacy03.html" target="_blank"><i class="xi-angle-right"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="duty-box ">
                        <p class="duty-title">회원의 의무</p>
                        <p class="duty-sub">회원이 기입한 정보는 모두 사실인 것으로 간주합니다. </br>
                            법률상 혼인이력이 있거나, 위조된 서류로 인증을 하는 경우 </br>
                            즉시 이용계약이 해지 되며 이로 인해 발생하는 <br class="mb" />회사측 손해에 대해서는 </br>
                            향후 구상권이 청구될 수 있습니다.</p>
                        <div class="duty-label">
                            <label for="duty-check">
                                <input type="checkbox" id="duty-check">
                                <span class="check-icon"></span>
                                회원의 의무를 모두 확인했으며 이에 동의합니다.
                            </label>
                        </div>

                    </div>
                    <button type="submit" class="submit-duty-btn">회원가입</button>
                </form>
            </div>-->
        </div>
    </main>
</template>
<script>
import InputVerifyNumber from "../../Components/Form/InputVerifyNumber";
import {Link} from "@inertiajs/inertia-vue";
import InputAddress from "../../Components/Form/InputAddress";

export default {
    components: {InputAddress, Link, InputVerifyNumber},
    data(){
        return {
            agree: 0,
            form: this.$inertia.form({
                ids: "",
                contact:"",
                email:"",
                name: "",
                password: "",
                password_confirmation: "",
                address: "",
                address_detail: "",
                address_zipcode: ""
            })
        }
    },

    methods: {
        register() {
            if(!this.agree)
                return alert("약관에 동의해주세요.");

            if(!this.form.contact)
                return alert("인증하기 버튼을 눌러 폰번호 인증을 먼저 진행해주세요.");

            this.form.post("/users");
        },

        clearLetter(){
            this.form.contact = this.form.contact.replace(/-/g, '');
        },

        verified(data){
            this.form.contact = data;
        }
    }
}
</script>
