<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)


// 下記のクラスを作成してください。

// Patient 
// lesson1からPersonを継承

// height: float 身長（ｍ）
// weight: float 体重 (kg)

// __construct(name: string, age:int, gender: string, height: float, weight: float)
// 名前、年齢、性別、身長、体重を受け取り初期化する。

// calculateStandardWeight() :float
// 平均体重を返す （身長 × 身長 × 22)

// getHeight()
// 身長を返す

// getWeight()
// 体重を返す

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。
require ("lesson1.php"); 

class Patient extends Person{
  private float $height; 
  private float $weight; 


  public function __construct(string $name, int $age, string $gender, float $height, float $weight){
      $this->name = $name;
      $this->age = $age;
      $this->gender = $gender;
      $this->height = $height;
      $this->weight = $weight;
    }
  
    public function calculateStandardWeight(): float{
      return $this->height * $this->height * 22;
    }
    

    public function getHeight(){
      return $this->name .'さんの身長は'.$this->height.'mなので';
    }

    public function getWeight(){
      return '現在の体重は'.$this->weight.'kgです。';
}
    public function selfIntroduction(): string {
      $i = $this->getHeight() . $this->getWeight() .'平均体重は'.$this->calculateStandardWeight().'kgです。';
      return $i;
}
}


    $yamada = new Patient('山田', 20, '男',1.5,80);
    echo $yamada->selfIntroduction();
?>