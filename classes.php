<?php
  class BaseClass 
  {
    protected $baseVariable1 = 31;
    protected $baseVariable2 = 42;

    public function setBaseVariable1(int $variable):void 
    {
      $this->baseVariable1 = $variable;
    }

    public function getBaseVariable1():int 
    {
      return $this->baseVariable1;
    }

    public function setBaseVariable2(int $variable):void 
    {
      $this->baseVariable2 = $variable;
    }
    
    public function getBaseVariable2():int 
    {
      return $this->baseVariable2;
    }
  }
  $baseClassObj = new BaseClass();
  $baseClassObj->setBaseVariable1(3123);
  $baseClassObj->setBaseVariable2(212);
  echo "baseVariable1 is: " . $baseClassObj->getBaseVariable1() . "<br>";
  echo "baseVariable2 is: " . $baseClassObj->getBaseVariable2() . "<br><br>";

  class inheritorBaseClass1 extends BaseClass {
    protected $inhBaseVar = 14;

    public function setInhBaseVar(int $variable):void
    {
      $this->inhBaseVar = $variable;
    }
    
    public function getInhBaseVar():int
    {
      return $this->inhBaseVar;
    }

    public function sum():int
    {
      $inner = $this->inhBaseVar;
      $outer = $this->baseVariable1;
      return $inner + $outer;
    }
  }
  $inhBaseObj1 = new inheritorBaseClass1();
  $inhBaseObj1->setInhBaseVar(22);
  echo "First inheritor from BaseClass inhBaseVar is: " . $inhBaseObj1->getInhBaseVar() . "<br>";
  echo "baseVariable1 + inhBaseVar = " . $inhBaseObj1->sum() . "<br><br>";

  final class inheritorBaseClass2 extends BaseClass {
    protected $inhBaseVar = 0;

    public function setInhBaseVar(int $variable):void
    {
      $this->inhBaseVar = $variable;
    }
    
    public function getInhBaseVar():int
    {
      return $this->inhBaseVar;
    }

    public function multiply()
    {
      $inner = $this->inhBaseVar;
      $outer = $this->baseVariable1;
      return $inner * $outer;
    }
  }

  abstract class inheritorBaseClass3 extends BaseClass {
    protected $inhBaseVar = 0;

    abstract protected function pow(int $a, int $b);

    public function setInhBaseVar(int $variable):void
    {
      $this->inhBaseVar = $variable;
    }
    
    public function getInhBaseVar():int
    {
      return $this->inhBaseVar;
    }

    public function diff():int
    {
      $inner = $this->inhBaseVar;
      $outer = $this->baseVariable2;
      return $inner - $outer ;
    }
  }

  class InheritorChild1 extends inheritorBaseClass1 
  {
    protected $inhChildVariable = 989;

    public function setInhChildVariable(int $variable):void 
    {
      $this->inhChildVariable = $variable;
    }

    public function getInhChildVariable():int 
    {
      return $this->inhChildVariable;
    }

    public function addInnerPropWithBase():int
    {
      $outer = $this->baseVariable1;
      $inner = $this->inhChildVariable;
      return $outer + $inner;
    }

    public function addInnerPropWithInheritBase():int
    {
      $outer = $this->inhBaseVar;
      $inner = $this->inhChildVariable;
      return $outer + $inner;
    }
  }

  class InheritorChild2 extends inheritorBaseClass1 
  {
    protected $inhChildVariable = 133;

    public function setInhChildVariable(int $variable):void 
    {
      $this->inhChildVariable = $variable;
    }

    public function getInhChildVariable():int 
    {
      return $this->inhChildVariable;
    }

    public function diffInnerPropWithBase():int
    {
      $outer = $this->baseVariable2;
      $inner = $this->inhChildVariable;
      return $outer - $inner;
    }

    public function diffInnerPropWithInheritBase():int
    {
      $outer = $this->inhBaseVar;
      $inner = $this->inhChildVariable;
      return $outer - $inner;
    }
  }

  class InheritorChild3 extends inheritorBaseClass3 
  {
    protected $inhChildVariable = 2113;

    public function pow(int $a, int $b) {
      return $a ** $b;
    }

    public function setInhChildVariable(int $variable):void 
    {
      $this->inhChildVariable = $variable;
    }

    public function getInhChildVariable():int 
    {
      return $this->inhChildVariable;
    }

    public function multiplyInnerPropWithBase():int
    {
      $outer = $this->baseVariable1;
      $inner = $this->inhChildVariable;
      return $outer * $inner;
    }

    public function addInnerPropWithInheritBase():int
    {
      $outer = $this->inhBaseVar;
      $inner = $this->inhChildVariable;
      return $outer * $inner;
    }
  }

  class InheritorChild4 extends inheritorBaseClass3 
  {
    protected $inhChildVariable = 11;

    public function pow(int $a, int $b) {
      return $a ** $b;
    }

    public function setInhChildVariable(int $variable):void 
    {
      $this->inhChildVariable = $variable;
    }
    
    public function getInhChildVariable():int 
    {
      return $this->inhChildVariable;
    }

    public function divideInnerPropWithBase():int
    {
      $outer = $this->baseVariable1;
      $inner = $this->inhChildVariable;
      return $outer / $inner;
    }

    public function divideInnerPropWithInheritBase():int
    {
      $outer = $this->inhBaseVar;
      $inner = $this->inhChildVariable;
      return $outer / $inner;
    }
  }
