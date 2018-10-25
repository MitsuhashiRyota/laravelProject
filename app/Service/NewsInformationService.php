<?php
declare(strict_types=1);
namespace App\Service;

use App\Entity\TNewsInformation;

use App\Implement\NewsInformationInterface;

use Illuminate\Http\Request;

class NewsInformationService implements NewsInformationInterface {

    public $response;

    /**
     * GetTNewsInformation
     * ニュース情報を取得
     * @param string $key Primary Key
     * @return TNewsInformation t_news_inforamtion
     */
    public function getNewsInformation(?string $key) {

        // Primary Key No Setting
        try {
            isset($key) ? $this->response = TNewsInformation::all() :
                    $this->response = TNewsInformation::findOrFail($key);
        } catch(Exception $e) {
            return $e->getMessage().PHP_EOL;
        } catch(TypeError $e) {
            return $e->getMessage().PHP_EOL;
        }

        return $this->response;
    }

    /**
     * SetNewsInformation
     * ニュース情報を格納
     * @param Request $request 格納データ一覧
     */
    public function setNewsInformation(Request $request) {

        try {
            // Insert Parameter
            $tNewInformation = new TNewsInformation();
            $tNewInformation->t_goods_inforamtions_id = $request->t_goods_inforamtions_id;
            $tNewInformation->news_title = $request->news_title;
            $tNewInformation->news_banner_image_path = $request->news_banner_image_path;
            $tNewInformation->new_details = $request->new_details;
            $tNewInformation->news_web_image_path = $request->news_web_image_path;
            $tNewInformation->create_date = $request->create_date;
            $tNewInformation->update_date = $request->update_date;

            // Save
            $tNewInformation->save();
        } catch(Exception $e) {
            return $e->getMessage().PHP_EOL;
        } catch(TypeError $e) {
            return $e->getMessage().PHP_EOL;
        }
    }
}
