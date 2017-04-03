cmake_minimum_required(VERSION 3.4.1)

######################## OWN #####################3################33
if (${CMAKE_SYSTEM_NAME} MATCHES "Android")
  add_definitions(-DOS_ANDROID)
  message("Checking CMAKE_ABI_NAME = '${CMAKE_ANDROID_ARCH_ABI}'")
else()
  message("OS not detected.")
endif()

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11 -Wall -Werror")

######################## OWN #####################3################33
set(OpenCV_ANDROID_SDK /home/mudro/OpenCV-android-sdk)
set(OpenCV_PREBUILT ${OpenCV_ANDROID_SDK}/sdk/native/jni)

######################## OWN #####################3################33
include(${OpenCV_PREBUILT}/OpenCVConfig.cmake)

######################## OWN #####################3################33
include_directories(${OpenCV_INCLUDE_DIRS} include)

add_library(native-lib SHARED src/main/cpp/native-lib.cpp)

find_library(log-lib log )

target_link_libraries(native-lib ${log-lib} ${OpenCV_LIBS})
