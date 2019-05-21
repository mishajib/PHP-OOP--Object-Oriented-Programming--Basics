<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
# পিএইচপি OOP পরিচিতি (PHP OOP INTRODUCTION)
/*
অবজেক্ট অরিয়েন্টেড প্রোগ্রামিং(OOP) এমন একটি প্রোগ্রামিং কৌশল যা রীতি অনুযায়ী একটি নির্দিষ্ট টপিক্স এর সকল ভ্যারিয়েবল এবং ফাংশনকে একটি একক ক্লাস এর মধ্যে দলবদ্ধ করে।

প্রসিডিউরাল স্টাইল প্রোগ্রামিং এর তুলনায় অবজেক্ট অরিয়েন্টেড প্রোগ্রামিং কৌশলকে অধিক উন্নত এবং কার্যকরী প্রোগ্রামিং ভাষা হিসাবে বিবেচনা করা হয়। কারণ এটি

-> অধিক সুসংগঠিত কোড স্টাইল সমর্থন করে
-> কোড মডুউলারিটি(modularity) সরবরাহ করে
-> কোড এর পুনরাবৃত্তি কমায় এবং কোড পুনঃব্যবহারযোগ্য করে তুলে

আপনি এই কৌশল ব্যবহার করে সহজেই জটিল, মডুলার(modular) এবং পুনঃব্যবহারযোগ্য ওয়েব অ্যাপ্লিকেশন তৈরি করতে পারবেন। এটি পিএইচপি ভার্সন-৫ থেকে পিএইচপিতে সংযোজিত হয়েছে।

বিঃদ্রঃ উপরোল্লিখিত এত সুবিধা সত্ত্বেও ছোট এবং সাধারণ প্রজেক্ট এর জন্য আমরা আপনাকে প্রসিডিউরাল প্রোগ্রামিং স্টাইল ব্যবহার করার সুপারিশ করছি।

যাইহোক যদি এমন হয় যে, আপনার প্রজেক্টের আকার দিন দিন বাড়তে থাকবে তাহলে অবজেক্ট অরিয়েন্টেড স্টাইল ব্যবহার করাই উত্তম হবে।
*/
/*
We can imagine our universe made of different objects like sun, earth, moon etc. Similarly we can imagine our car made of different objects like wheel, steering, gear etc.
Same way there is object oriented programming concepts which assume everything as an object and implement a software using different objects.
*/

# পিএইচপি OOP (PHP OOP)
/*
OOP এর পূর্ণরূপ হলঃ Object-Oriented Programming। OOP তে সবকিছুই অবজেক্ট। যেমন- আপনি আমাদের এই বিশ্বকে নিয়ে কল্পনা করতে পারেন যা চাঁদ, সূর্য, পৃথিবী ইত্যাদি অবজেক্ট নিয়ে গঠিত।

একইভাবে, আপনি একটি গাড়ি কল্পনা করতে পারেন যা চাকা, গিয়ার, ইঞ্জিন ইত্যাদি অবজেক্ট নিয়ে গঠিত।

অবজেক্ট অরিয়েন্টেড প্রোগ্রামিং এর ধারণাও অনেকটা পথিবী এবং গাড়ির মতই। এটি সবকিছুকেই অবজেক্ট হিসাবে বিবেচনা করে। আপনি এই অবজেক্ট সমূহ ব্যবহার করে বিভিন্ন অ্যাপ্লিকেশন তৈরি করতে পারেন।

পিএইচপির ভার্সন-৪ এ অবজেক্ট অরিয়েন্টেড বৈশিষ্ট্য না থাকলেও ভার্সন-৫ এ অবজেক্ট অরিয়েন্টেড প্রোগ্রামিং কৌশল এর সম্পূর্ণ বৈশিষ্ট্য যুক্ত হয়েছে। পিএইচপিতে অবজেক্ট অরিয়েন্টেড প্রোগ্রামিং ব্যবহার করে অনেক বৃহৎ ও জটিল ওয়েব অ্যাপ্লিকেশন তৈরি করা সম্ভব।
*/
# Example
class Greeting{
  public function hello(){
    echo "HELLO WORLD!!";
  }
}
$greeting = new Greeting;
$greeting->hello();
/*
অবজেক্ট অরিয়েন্টেডের গুরুত্বপূর্ণ বিষয় বস্তু
আমরা আমাদের টিউটোরিয়ালে অবজেক্ট অরিয়েন্টেডের নিম্নোক্ত বিষয় সমূহ নিয়ে আলোচনা করবোঃ

 PHP: Class - প্রোপার্টি(মেম্বার ভ্যারিয়েবল) এবং মেম্বার ফাংশন(মেথড) এর সমন্বয়ে অবজেক্ট তৈরির জন্য ক্লাস হলো সম্প্রসারণযোগ্য প্রোগ্রামিং কোড এর একটি নীল নকশা(templete)।
 PHP: Object - অবজেক্ট হলো ক্লাস এর একটি বিশেষ নিদর্শন(instance) যা ভ্যারিয়েবল, ফাংশন এবং ডেটা স্ট্রাকচার এর সমন্বয়ে গঠিত হতে পারে।
 PHP: Method - ক্লাস এর মেম্বার ফাংশনসমূহকে OOP তে মেথড বলা হয়। মেথড হলো অবজেক্ট-ক্লাস এর সাথে সম্পর্কিত একটি প্রক্রিয়া। একটি অবজেক্ট তথ্য এবং তথ্য প্রক্রিয়া এর সমন্বয়ে গঠিত হয়। "তথ্যকে" অবজেক্ট এর বৈশিষ্ট্য(property) এবং "তথ্য প্রক্রিয়াকে" মেথড এর মাধ্যমে প্রকাশ করা হয়। মেথড বাইরের অবজেক্ট এর সাথেও সম্পর্ক তৈরি করতে পারে।
 PHP: Property - ক্লাস এর মেম্বার ভ্যারিয়েবল।
 PHP: Encapsulation - প্রোপার্টি এবং মেথডসমূহ একত্রিত করে অবজেক্ট তৈরির একটি কৌশল।
 PHP: Inheritance - কোড ডুপ্লিকেশন কমানোর জন্য প্যারেন্ট ক্লাস এর প্রোপার্টি এবং মেথড চাইল্ড ক্লাসও ব্যবহার করতে পারে।
 PHP: Parent class - অন্য সকল ক্লাস এই ক্লাস কে ইনহেরিট করে। প্যারেন্ট ক্লাসের অপর নাম সুপার ক্লাস বা বেইজ ক্লাস।
 PHP: Child Class - এই ক্লাস অন্য সকল ক্লাসকে ইনহেরিট করে। এই ক্লাসের অপর নাম সাবক্লাস বা ডিরাইভ ক্লাস।
 PHP: Polymorphism - বিভিন্ন ক্লাসের যেসব মেথডসমূহ একই কাজে ব্যবহৃত হয় তাদের নামকরণ একই হওয়া।
 PHP: Overloading and Overriding - অভারলোডিং তখনই ঘটে যখন একই ক্লাসে দুই বা তার অধিক মেথড এর নাম একই কিন্তু প্যারামিটার ভিন্ন হয়। Overriding এর অর্থ হলো দুটি মেথডের নাম এবং প্যারামিটার(method signature) একই। একটি মেথড থাকে প্যারেন্ট ক্লাসে এবং অপরটি থাকে চাইল্ড ক্লাসে।
 PHP: abstract class and method - এটি একটি অবজেক্ট অরিয়েন্টেড প্রোগ্রামিং পদ্ধতি। এই পদ্ধতিতে একজন প্রোগ্রামার প্রাসঙ্গিক তথ্য ছাড়া সকল কিছুই লুকিয়ে রাখতে পারে। যেমন- প্যারেন্ট ক্লাসের কিছু নির্দিষ্ট মেথডে চাইল্ড ক্লাস এক্সেস নিতে পারবে এমন অঙ্গীকার করার জন্য আমরা abstract class ব্যবহার করি। কিন্তু আমরা এই অঙ্গীকার করি না যে, মেথডের মধ্যে কি ধরণের কোড থাকবে।
 PHP: Interface - প্যারেন্ট ক্লাস চাইল্ড ক্লাসের সাথে এই অঙ্গীকার করে যে, মেথড বাস্তবায়নের জন্য চাইল্ড ক্লাস প্যারেন্ট ক্লাস এর abstract মেথডসমূহ এক্সেস করতে পারবে।
 PHP: public, private এবং protected প্রোপার্টি - প্রোপার্টিসমূহ public, private অথবা protected হতে পারে। public অর্থ প্রোপার্টিসমূহকে যেকোন স্থান থেকে এক্সেস করা যাবে, private অর্থ শুধুমাত্র সংশ্লিষ্ট ক্লাস থেকে এক্সেস করা যাবে এবং protected অর্থ হলো সংশ্লিষ্ট ক্লাস এবং এর চাইল্ড ক্লাস থেকেও এক্সেস করা যাবে।
 PHP: Public, Private এবং Protected মেথড - মেথডসমূহ public, private অথবা protected হতে পারে। public অর্থ মেথডসমূহকে যেকোন স্থান থেকে এক্সেস করা যাবে, private অর্থ শুধুমাত্র সংশ্লিষ্ট ক্লাস থেকে এক্সেস করা যাবে এবং protected অর্থ হলো সংশ্লিষ্ট ক্লাস এবং এর চাইল্ড ক্লাস থেকেও এক্সেস করা যাবে।
 PHP: Constructor - পিএইচপির বিশেষ ধরণের বিল্ট-ইন মেথড। অবজেক্ট তৈরির সময় প্রোপার্টির ভ্যালু এসাইনে সম্মতি দেয়। অবজেক্ট তৈরি হলে এই মেথডটি স্বয়ংক্রিয়ভাবেই সম্পাদিত হয়। দুটি আন্ডারস্কোর(__) দিয়ে construct মেথড শুরু হয়।
 PHP: Destructor - Constructor এর বিপরীত। অবজেক্ট ধ্বংশ হয়ে গেলে এটি স্বয়ংক্রিয়ভাবেই কল হয়।
 PHP: Type Hinting - ফাংশন ডিক্লেয়ারেশনের সময় আরগুমেন্ট এর জন্য প্রত্যাশিত ডেটা টাইপ( (arrays, objects, interface ইত্যাদি) নির্ধারণ করে দেওয়া হয়।
 PHP: Static property এবং method - নতুন অবজেক্ট তৈরি করা ছাড়াই ক্লাস এর প্রোপার্টি এবং মেথডকে এক্সেস করা যায়।
 PHP: Object Cloning - অবজেক্ট এর একটি কপি তৈরি করতে ক্লোনিং ব্যবহৃত হয়।
 PHP : spl_autoload_register() - প্রয়োজনীয় সকল ক্লাসকে সংশ্লিষ্ট ফাইলে স্বয়ংক্রিয়ভাবে লোড করে।
PHP : $this - এটি একটি বিশেষ ধরনের ভ্যারিয়েবল যা একই অবজেক্টকে নির্দেশ করে।
 PHP: scope Resolution Operator(::) - একটি class এর static, constant এবং overridden প্রোপার্টি অথবা মেথডকে এক্সেস করতে পিএইচপি scope Resolution Operator(::) ব্যবহৃত হয়।
 PHP: Magic Method __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state() এবং __clone() ফাংশনকে পিএইচপি ম্যাজিক মেথড বলা হয়।
*/
/*
Object Oriented Concepts
Before we go in detail, lets define important terms related to Object Oriented Programming.

Class − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.

Object − An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.

Member Variable − These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.

Member function − These are the function defined inside a class and are used to access object data.

Inheritance − When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.

Parent class − A class that is inherited from by another class. This is also called a base class or super class.

Child Class − A class that inherits from another class. This is also called a subclass or derived class.

Polymorphism − This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.

Overloading − a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.

Data Abstraction − Any representation of data in which the implementation details are hidden (abstracted).

Encapsulation − refers to a concept where we encapsulate all the data and member functions together to form an object.

Constructor − refers to a special type of function which will be called automatically whenever there is an object formation from a class.

Destructor − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.
*/
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
