<?php
namespace Services\HelloWorld;
 
class HelloWorldHandler implements HelloWorldIf {
  public function sayHello($name)
  {
      return "服务器结果：$name";
  }
}

