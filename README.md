
# ホームメイド商品販売サイト

### about this app

- 商品を気軽にCRUDできるアプリ
- 姉がホームメイド商品を作って売りたいといっていたので､販売アプリをプレゼントしたら喜ぶかなって思って作りました｡
- 初期データとして､商品3つをSeederで登録しています｡

### 実装機能

- CRUD
商品がCRUDできるようになっています
バリデーションも実装済
- ファイルアップロード
画像を、ファイルアップロードできるようにしました｡
ファイルアップロードするとき、画面上にプレビュー画像が表示されるようにしました
アップロードした画像は、/storage/app/public/all_image配下に保存

### 画面

* 一覧画面
![一覧画面](./doc/readme_image/index.png)

* 詳細画面
![詳細画面](./doc/readme_image/show.png)

* 登録画面
![登録画面](./doc/readme_image/create.png)

* 編集画面
![編集画面](./doc/readme_image/edit.png)

* エラー登録画面
![エラー登録](./doc/readme_image/create.validation.png)

* エラー編集画面
![エラー編集](./doc/readme_image/edit.validation.png)

