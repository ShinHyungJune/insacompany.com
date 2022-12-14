<?php

namespace Tests\Feature;

use App\Enums\Sex;
use App\Models\Dating;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatingsTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->actingAs($this->user);
    }

    /** @test */
    public function 여자는_선호지역_및_선호일정을_수정할_수_있다()
    {
        $this->user->update([
            "sex" => Sex::MEN
        ]);

        $datings = Dating::factory()->count(3)->create([
            "men_id" => $this->user->id
        ]);

        $this->get("/datings")->assertInertia(function($page) use($datings){
            $items = $page->toArray()["props"]["datings"]["data"];

            $this->assertCount(count($datings), $items);
        });
    }

    /** @test */
    public function 주소가_있을_경우_여자는_장소확인여부를_수정할_수_있다 ()
    {

    }

    /** @test */
    public function 여자가_장소확인여부를_확인으로_수정할_시_양쪽의_데이트_이용권은()
    {

    }

    /** @test */
    public function 남자는_최종일정과_주소를_수정할_수_있다 ()
    {

    }

    /** @test */ //일정은_정해졌으나_장소확인여부없이(최종매칭없이)_일정이_지난_소개팅은_사용횟수_돌려주기(매일밤 12시에 배치체크)
    public function 일정은_정해졌으나_장소확인여부없이_일정이_지난_소개팅은_사용횟수_돌려주기()
    {

    }

}
