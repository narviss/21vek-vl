<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => '                  GNU LESSER GENERAL PUBLIC LICENSE
                       Version 3, 29 June 2007

 Copyright (C) 2007 Free Software Foundation, Inc. <http://fsf.org/>
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.


  This version of the GNU Lesser General Public License incorporates
the terms and conditions of version 3 of the GNU General Public
License, supplemented by the additional permissions listed below.

  0. Additional Definitions.

  As used herein, "this License" refers to version 3 of the GNU Lesser
General Public License, and the "GNU GPL" refers to version 3 of the GNU
General Public License.

  "The Library" refers to a covered work governed by this License,
other than an Application or a Combined Work as defined below.

  An "Application" is any work that makes use of an interface provided
by the Library, but which is not otherwise based on the Library.
Defining a subclass of a class defined by the Library is deemed a mode
of using an interface provided by the Library.

  A "Combined Work" is a work produced by combining or linking an
Application with the Library.  The particular version of the Library
with which the Combined Work was made is also called the "Linked
Version".

  The "Minimal Corresponding Source" for a Combined Work means the
Corresponding Source for the Combined Work, excluding any source code
for portions of the Combined Work that, considered in isolation, are
based on the Application, and not on the Linked Version.

  The "Corresponding Application Code" for a Combined Work means the
object code and/or source code for the Application, including any data
and utility programs needed for reproducing the Combined Work from the
Application, but excluding the System Libraries of the Combined Work.

  1. Exception to Section 3 of the GNU GPL.

  You may convey a covered work under sections 3 and 4 of this License
without being bound by section 3 of the GNU GPL.

  2. Conveying Modified Versions.

  If you modify a copy of the Library, and, in your modifications, a
facility refers to a function or data to be supplied by an Application
that uses the facility (other than as an argument passed when the
facility is invoked), then you may convey a copy of the modified
version:

   a) under this License, provided that you make a good faith effort to
   ensure that, in the event an Application does not supply the
   function or data, the facility still operates, and performs
   whatever part of its purpose remains meaningful, or

   b) under the GNU GPL, with none of the additional permissions of
   this License applicable to that copy.

  3. Object Code Incorporating Material from Library Header Files.

  The object code form of an Application may incorporate material from
a header file that is part of the Library.  You may convey such object
code under terms of your choice, provided that, if the incorporated
material is not limited to numerical parameters, data structure
layouts and accessors, or small macros, inline functions and templates
(ten or fewer lines in length), you do both of the following:

   a) Give prominent notice with each copy of the object code that the
   Library is used in it and that the Library and its use are
   covered by this License.

   b) Accompany the object code with a copy of the GNU GPL and this license
   document.

  4. Combined Works.

  You may convey a Combined Work under terms of your choice that,
taken together, effectively do not restrict modification of the
portions of the Library contained in the Combined Work and reverse
engineering for debugging such modifications, if you also do each of
the following:

   a) Give prominent notice with each copy of the Combined Work that
   the Library is used in it and that the Library and its use are
   covered by this License.

   b) Accompany the Combined Work with a copy of the GNU GPL and this license
   document.

   c) For a Combined Work that displays copyright notices during
   execution, include the copyright notice for the Library among
   these notices, as well as a reference directing the user to the
   copies of the GNU GPL and this license document.

   d) Do one of the following:

       0) Convey the Minimal Corresponding Source under the terms of this
       License, and the Corresponding Application Code in a form
       suitable for, and under terms that permit, the user to
       recombine or relink the Application with a modified version of
       the Linked Version to produce a modified Combined Work, in the
       manner specified by section 6 of the GNU GPL for conveying
       Corresponding Source.

       1) Use a suitable shared library mechanism for linking with the
       Library.  A suitable mechanism is one that (a) uses at run time
       a copy of the Library already present on the user\'s computer
       system, and (b) will operate properly with a modified version
       of the Library that is interface-compatible with the Linked
       Version.

   e) Provide Installation Information, but only if you would otherwise
   be required to provide such information under section 6 of the
   GNU GPL, and only to the extent that such information is
   necessary to install and execute a modified version of the
   Combined Work produced by recombining or relinking the
   Application with a modified version of the Linked Version. (If
   you use option 4d0, the Installation Information must accompany
   the Minimal Corresponding Source and Corresponding Application
   Code. If you use option 4d1, you must provide the Installation
   Information in the manner specified by section 6 of the GNU GPL
   for conveying Corresponding Source.)

  5. Combined Libraries.

  You may place library facilities that are a work based on the
Library side by side in a single library together with other library
facilities that are not Applications and are not covered by this
License, and convey such a combined library under terms of your
choice, if you do both of the following:

   a) Accompany the combined library with a copy of the same work based
   on the Library, uncombined with any other library facilities,
   conveyed under the terms of this License.

   b) Give prominent notice with the combined library that part of it
   is a work based on the Library, and explaining where to find the
   accompanying uncombined form of the same work.

  6. Revised Versions of the GNU Lesser General Public License.

  The Free Software Foundation may publish revised and/or new versions
of the GNU Lesser General Public License from time to time. Such new
versions will be similar in spirit to the present version, but may
differ in detail to address new problems or concerns.

  Each version is given a distinguishing version number. If the
Library as you received it specifies that a certain numbered version
of the GNU Lesser General Public License "or any later version"
applies to it, you have the option of following the terms and
conditions either of that published version or of any later version
published by the Free Software Foundation. If the Library as you
received it does not specify a version number of the GNU Lesser
General Public License, you may choose any version of the GNU Lesser
General Public License ever published by the Free Software Foundation.

  If the Library as you received it specifies that a proxy can decide
whether future versions of the GNU Lesser General Public License shall
apply, that proxy\'s public statement of acceptance of any version is
permanent authorization for you to choose that version for the
Library.
',
    'readme' => 'phpThumbOn
=========
Оптимизированный сниппет phpThumbOf под MODX Revolution. Схожый синтаксис, но более быстрая работа. Более подробно смотрите в changelog

Проект на GitHub: https://github.com/AgelxNash/phpthumbon
Документация: http://blog.agel-nash.ru/addon/phpthumbon.html',
    'changelog' => 'phpThumbOn 1.2.1 (27.12.2013)
=====================================
- Баг со сбросом информации об объекте при ответе процессора
- Исправление проблемы с абсолютными путями

phpThumbOn 1.2.0 (26.12.2013)
=====================================
- Удаление ранее созданных превью при повторном вызове сниппета с другими параметрами
- Избавление от пустоты на выходе, если скрипт не смог создать превьюху
- Кеширование сжатых noimage картинок
- Возможность обработки нескольких картинок очереди за 1 запуск процессора
- Исправлено логирование проблемных картинок
- Кастомные имена превьюх

phpThumbOn 1.1.0 (06.12.2013)
=====================================
- Добавлена поддержка очереди сжатия

phpThumbOn 1.0.2 (16.09.2013)
=====================================
- Исправлена работа в режиме AJAX

phpThumbOn 1.0.1 (25.08.2013)
=====================================
- Исправлено некорректное восприятие параметра input с начальным слешем

phpThumbOn 1.0.0 (02.08.2013)
=====================================
- Имя файла превьюхи максимально вычищенно от непонятных последовательностей символов
- Картинки семантично раскладываются по папкам в соответствии с оригинальными картинками
- Удалены постоянные проверки и отчистки всего кеша
- Отключена поддержка AWS Amazon
- Добавлен ряд параметров отвечающих за качество и тип превьюхи по умолчанию
- Код сниппета оптимизирован под множественные вызовы',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '947b9ad0e06f6e44729fed8e0db8aecf',
      'native_key' => 'phpthumbon',
      'filename' => 'modNamespace/943db928e773df0084bb7ce6150118dd.vehicle',
      'namespace' => 'phpthumbon',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSnippet',
      'guid' => '9e9d8250d656ed72bf790835ea239f42',
      'native_key' => NULL,
      'filename' => 'modSnippet/9e9699c9431df67cde8b2a0f8280fff4.vehicle',
      'namespace' => 'phpthumbon',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bc4d0a8c3da8bb98acbdefe85eadea6c',
      'native_key' => 'phpthumbon.images_dir',
      'filename' => 'modSystemSetting/e1dab0a317525de5c88f42eaf64a807b.vehicle',
      'namespace' => 'phpthumbon',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '12d932c3413f6395fb1ffe74a73fad48',
      'native_key' => 'phpthumbon.quality',
      'filename' => 'modSystemSetting/c14ec7bfda2f3c4f929e5ff4c50f0022.vehicle',
      'namespace' => 'phpthumbon',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ab6f75a05730d3a2e847eefff8671f40',
      'native_key' => 'phpthumbon.cache_dir',
      'filename' => 'modSystemSetting/a200f2fd4b557b630382ed5d20b9451e.vehicle',
      'namespace' => 'phpthumbon',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '817c8bbfb82659ee6212db0e3210cad4',
      'native_key' => 'phpthumbon.ext',
      'filename' => 'modSystemSetting/7afab46b29c83420013d9231f2364768.vehicle',
      'namespace' => 'phpthumbon',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7e708ab498a94e2a64a80fcbf4353277',
      'native_key' => 'phpthumbon.noimage',
      'filename' => 'modSystemSetting/f596813738ac20734c25f2a5f082c723.vehicle',
      'namespace' => 'phpthumbon',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fe057fcfb3267ddf589f35ba95df5ce5',
      'native_key' => 'phpthumbon.queue',
      'filename' => 'modSystemSetting/9f7d7cf2c47cfc167f5b6e3e339fdfcb.vehicle',
      'namespace' => 'phpthumbon',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ddf3ed22b160a258472e633559eabb7c',
      'native_key' => 'phpthumbon.error_mode',
      'filename' => 'modSystemSetting/32f01eb2459f49080ea84721cc2e231c.vehicle',
      'namespace' => 'phpthumbon',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '73b9e205cce904dc993a6eb0b95ff975',
      'native_key' => 'phpthumbon.noimage_cache',
      'filename' => 'modSystemSetting/21f4feaf5133b8e4042b8de1bc40c3b4.vehicle',
      'namespace' => 'phpthumbon',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '31cd17fbe5d4b44f308c66d9180422f2',
      'native_key' => 'phpthumbon.make_cachename',
      'filename' => 'modSystemSetting/9aa84cb742261d51992d13d3687a29a3.vehicle',
      'namespace' => 'phpthumbon',
    ),
  ),
);