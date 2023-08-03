<?php

    // Template Name: profile 

    get_header(); 
 
?>

<section class="city__hero mt-[-96px] -z-10 relative bg-no-repeat" style="background-image: url('/wp-content/uploads/2023/07/Profilebg.png'); background-size: cover;">
    <div class="absolute top-0 left-0 w-full h-1/2" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.01));"></div>
    <div class="max-w-[1140px] mx-auto">
        <div class="city__wrapper pb-20 md:pb-[126px] pt-44 md:pt-[205px] px-[10px] md:px-5 xl:px-0 relative">
            <h1 class="text-white text-2xl md:text-3xl lg:text-[45px] xl:leading-[40px] uppercase font-bold font-lora text-center">New York City Lawyers</h1>
        </div>
    </div>
</section>

<section class="form__sec bg-babypowder">
    <div class="max-w-[1140px] mx-auto bg-darkblue mt-[45px]">
        <div class="form__wrapper p-[12px]">
            <div class="px-5 md:px-[50px] pt-[30px] pb-10 border border-[#416599]">
                <h2 class="font-lora font-semibold text-white text-2xl md:text-3xl lg:text-[40px] xl:leading-[30px] uppercase mb-[30px] text-center">Helping You with All Your Legal Needs</h2>
                <form>
                    <div class="form__inner flex flex-col lg:flex-row gap-5">
                        <div class="custom-select w-full h-[67px]">
                            <select class="w-full h-[67px] text-white px-4 md:px-[30px] py-[22px] bg-transparent border border-[#416599] font-poppins font-semibold text-[17px] uppercase outline-none cursor-pointer relative" name="select_lawyer" id="select_lawyer">
                                <option value="">Lawyer Name</option>
                                <option value="name">John Doe</option>
                            </select>
                        </div>
                        <div class="w-full h-[67px]">
                            <select class="w-full h-[67px] text-white px-4 md:px-[30px] py-[22px] bg-transparent border border-[#416599] font-poppins font-semibold text-[17px] uppercase outline-none cursor-pointer relative" name="location" id="location">
                                <option value="">I Need Help Near</option>
                                <option value="name">John Doe</option>
                            </select>
                        </div>
                        <input type="submit" value="Find A Lawyer" class="bg-gold text-white px-[30px] h-[67px] text-sm md:text-base lg:text-lg font-bold font-poppins uppercase cursor-pointer">
                    </div>
                </form>
                <h3></h3>
            </div>
        </div>
    </div>
</section>

<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto">
        <div class="profile__wrapper pt-10 pb-[50px] px-[10px] md:px-5 xl:px-0 flex flex-col lg:flex-row gap-5 md:gap-0  lg:gap-5 xl:gap-0 justify-between">
            <div class="w-full lg:w-[75%] xl:max-w-[820px]">
                <div class="p-[30px] lg:py-[30px] lg:pl-[30px] flex flex-col md:flex-row items-center gap-[30px] h-auto bg-white rounded-lg border border-[#e6eaf1] mb-8">
                    <div class="w-full md:w-[180%] lg:w-[40%] xl:w-[40%]">
                        <img class="w-full xl:w-[225px]" src="/wp-content/uploads/2023/07/lawyer.jpg" alt="">
                    </div>
                    <div class="w-full lg:w-[60%] xl:w-full">
                        <div class="flex flex-col lg:flex-row xl:divide-x">
                            <div class="w-full">
                                <span class="font-lora font-medium text-darkblue text-xl md:text-[22px] lg:text-[25px] xl:leading-[30px] mb-[8px]">Jonathan Sooriash</span>
                                <p class="font-poppins font-medium text-sm text-black mb-[12px]">Perez and Perez</p>
                                <div class="flex flex-col gap-[6px] pl-[25px]">
                                    <p class="font-poppins font-regular text-[15px] text-davygray w-[150px] location2 relative">1440 N. Harbor Blvd Fullerton, CA 92835</p>
                                    <p class="font-poppins font-regular text-[15px] text-davygray hamer relative">Senior Attorney</p>
                                    <p class="font-poppins font-regular text-[15px] text-davygray exp relative">22 years of experience</p>
                                    <p class="font-poppins font-regular text-[15px] text-davygray page relative">Personal Injury, Criminal Law, DUI & DWI</p>
                                    <p class="font-poppins font-regular text-[15px] text-davygray globe relative">California</p>
                                </div>
                            </div>

                            <div class="w-full lg:w-[148px] xl:w-[204px] xl:pl-[25px] xl:pr-[30px]">
                                <div class="mb-[35px] w-full inline-flex items-center justify-end">
                                    <img src="/wp-content/uploads/2023/07/heart.png" alt="">
                                </div>
                                <div class="flex flex-col items-center">
                                    <img class="mb-3" src="/wp-content/uploads/2023/07/stars.png" alt="">
                                    <a class="w-[148px] h-[42px] font-poppins font-bold text-white text-[15px] inline-flex items-center justify-center bg-gold" href="#">View Website</a>
                                    <p class="font-poppins font-medium text-[15px] text-black mt-[25px] mb-4">Badges</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border border-[#e6eaf1] bg-white rounded-lg mb-5">
                    <div class="p-3 md:p-5 lg:p-11">
                        <h2 class="font-lora font-semibold text-darkblue text-xl md:text-2xl lg:text-[30px] xl:leading-[30px] mb-[18px]">Biography</h2>
                        <p class="font-poppins font-regular text-[16px] text-davygray mb-4">Undergraduate: Univ of California Santa Barbara, Santa Barbara, California - BA; School of Law: Whittier College School of Law; Los Angeles, California - JD Associations: Orange County Bar Association, Los Angeles County Bar Association, Beverly Hills Bar Association, Orange County Hispanic Bar Association- Board Member, American Bar Association, Mexican American Bar Association, California Attorneys for Criminal Justice Honors: Whittier Law Review Member, Whittier Law School Certified - Center for Children's Rights, Judicial Clerkship for Supervising Judge for Los Angeles Superior Court - Honorable Judge Nash</p>
                        <p class="font-poppins font-regular text-[16px] text-davygray mb-4">As a qualified and experienced DUI Defense Attorney, I know that it is not uncommon for law enforcement to make mistakes.</p>
                    </div>
                </div>

                <div class="border border-[#e6eaf1] bg-white rounded-lg mb-5">
                    <div class="p-3 md:p-5 lg:px-11 lg:pt-[5px] lg:pb-0 flex flex-col divide-y divide-[#e6eaf1]">
                        <div class="pt-[30px]">
                            <h2 class="font-lora font-semibold text-darkblue text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[16px]">Bar Admission</h2>
                            <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Connecticut, 1958</p>
                        </div>

                        <div class="pt-[30px]">
                            <h2 class="font-lora font-semibold text-darkblue text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[16px]">Bar Admission</h2>
                            <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Connecticut, 1958</p>
                        </div>

                        <div class="pt-[30px]">
                            <h2 class="font-lora font-semibold text-darkblue text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[6px]">Bar Admission</h2>
                            <div class="flex flex-col divide-y divide-[#e6eaf1] pl-[26px]">
                                <div class="pt-5">
                                    <h3 class="font-poppins font-semibold text-[18px] xl:leading-[30px] mb-[12px] check relative">Personal Injury</h3>
                                    <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Animal & Dog Bites, Brain Injury, Car Accidents, Construction Accidents, Motorcycle Accidents, Premises Liability, Truck Accidents, Wrongful Death</p>
                                </div>

                                
                                <div class="pt-5">
                                    <h3 class="font-poppins font-semibold text-[18px] xl:leading-[30px] mb-[12px] check relative">Criminal Law</h3>
                                    <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Criminal Appeals, Drug Crimes, Expungement, Fraud, Gun Crimes, Internet Crimes, Sex Crimes, Theft, Violent Crimes</p>
                                </div>

                                <div class="pt-5">
                                    <h3 class="font-poppins font-semibold text-[18px] xl:leading-[30px] mb-[12px] check relative">Criminal Law</h3>
                                    <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Criminal Appeals, Drug Crimes, Expungement, Fraud, Gun Crimes, Internet Crimes, Sex Crimes, Theft, Violent Crimes</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-[30px]">
                            <h2 class="font-lora font-semibold text-darkblue text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[16px]">Bar Admission</h2>
                            <ul class="check__icon pl-[30px]">
                                <li class="text-sm md:text-base lg:text-lg font-poppins font-medium mb-[10px] relative">Motor vehicle accidents</li>
                                <li class="text-sm md:text-base lg:text-lg font-poppins font-medium mb-[10px] relative">Motor vehicle accidents</li>
                                <li class="text-sm md:text-base lg:text-lg font-poppins font-medium mb-[10px] relative">Motor vehicle accidents</li>
                                <li class="text-sm md:text-base lg:text-lg font-poppins font-medium mb-[10px] relative">Motor vehicle accidents</li>
                                <li class="text-sm md:text-base lg:text-lg font-poppins font-medium mb-[10px] relative">Motor vehicle accidents</li>
                            </ul>
                        </div>

                        <div class="pt-[30px]">
                            <h2 class="font-lora font-semibold text-darkblue text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[16px]">Bar Admission</h2>
                            <p class="font-poppins font-regular text-[15px] text-davygray mb-4"><span class="text-lg text-black font-semibold">California: </span>Connecticut, 1958</p>
                        </div>

                        <div class="pt-[30px]">
                            <h2 class="font-lora font-semibold text-darkblue text-lg md:text-xl lg:text-[22px] xl:leading-[30px]">Awards</h2>
                            <div class="pl-[26px] flex-col divide-y pb-[10px]">
                                <div class="pt-[18px]">
                                    <p class="font-poppins font-regular text-[15px] text-davygray mb-4 check relative"><span class="text-lg text-black font-semibold">Personal Injury: </span>Lead Council 2017</p>
                                </div>

                                <div class="pt-[18px]">
                                    <p class="font-poppins font-regular text-[15px] text-davygray mb-4 check relative"><span class="text-lg text-black font-semibold">California: </span>Connecticut, 1958</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        
            <div class="w-full lg:w-[25%] xl:w-[280px] bg-white rounded-lg border border-[#e6eaf1] h-[475.5px]">
                <div class="p-3 md:p-5 lg:p-[26px]">
                    <h2 class="font-lora font-semibold text-darkblue text-xl md:text-2xl lg:text-[30px] xl:leading-[30px] mb-[24px]">Contact Us</h2>
                    <form>
                        <div class="mb-[10px]">
                            <span class="name-box relative z-10"></span>
                            <input class="border border-[#e6eaf1] py-3 h-[52px] font-poppins font-regular text-davygray text-[15px] rounded w-full pl-10 pr-3 leading-tight required outline-none relative" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="mb-[10px]">
                            <span class="email-box relative z-10"></span>
                            <input class="email border border-[#e6eaf1] py-3 h-[52px] font-poppins font-regular text-[15px] rounded w-full pl-10 pr-3 text-gray-700 leading-tight  required outline-none relative" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="mb-[15px]">
                            <span class="text-box relative z-10"></span>
                            <textarea class="border border-[#e6eaf1] py-3 font-poppins font-regular text-[15px] rounded w-full h-[115px] pl-10 pr-3 text-gray-700 leading-tight required outline-none relative" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="mb-6 font-poppins font-regular text-[15px]">
                            <span class="text-[#FF0000]">*</span> Indicates required field
                        </div>
                        <div class="mb-[14px]">
                            <input class="w-full h-[47px] uppercase font-poppins font-bold text-white text-[15px] inline-flex items-center justify-center bg-gold" type="submit" value="Contact Us">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto px-[10px] md:px-5 xl:px-0">
    <h2 class="font-lora font-semibold text-darkblue text-2xl md:text-3xl lg:text-[40px] xl:leading-[30px] mb-8">Websites</h2>
        <div class="website__wrapper bg-white border border-[#e6eaf1] mb-14 rounded-lg w-full lg:w-[75%] xl:max-w-[820px]">
            <div class="px-3 md:px-5 lg:px-12 pt-0 lg:pt-[22px] xl:pb-2">
                <div class="flex flex-col divide-y divide-[#e6eaf1]">
                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-xl xl:leading-[30px] mb-[10px] text-darkblue check relative">Website</h3>
                        <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Stephen Bilkis & Associates Main Website</p>
                    </div>

                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-xl xl:leading-[30px] mb-[10px] text-darkblue check relative">Criminal Law</h3>
                        <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Criminal Appeals, Drug Crimes, Expungement, Fraud, Gun Crimes, Internet Crimes, Sex Crimes, Theft, Violent Crimes</p>
                    </div>

                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-xl xl:leading-[30px] mb-[10px] text-darkblue check relative">Criminal Law</h3>
                        <p class="font-poppins font-regular text-[15px] text-davygray mb-4">Criminal Appeals, Drug Crimes, Expungement, Fraud, Gun Crimes, Internet Crimes, Sex Crimes, Theft, Violent Crimes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto px-[10px] md:px-5 xl:px-0">
    <h2 class="font-lora font-semibold text-darkblue text-2xl md:text-3xl lg:text-[40px] xl:leading-[30px] mb-8">Blog</h2>
        <div class="blog__wrapper bg-white border border-[#e6eaf1] mb-[60px] rounded-lg w-full lg:w-[75%] xl:max-w-[820px]">
            <div class="px-3 md:px-5 lg:px-12 pt-0 lg:pt-[22px] xl:pb-2">
                <div class="mt-[-15px] lg:mt-[-36px] lg:mb-[10px]">
                    <div class="w-[184px] h-5 inline-flex items-center justify-center bg-darkblue text-white font-poppins font-medium text-[12px] uppercase">
                        Brain Injury Lawyer Blog
                    </div>
                </div>
                <div class="flex flex-col divide-y divide-[#e6eaf1]">
                    <div class="pt-[30px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[6px] text-darkblue check relative">A mother, tired from having worked all day, got stressed out when her seven-month old son woke.</h3>
                        <p class="font-poppins font-semibold text-[12px] text-gold mb-[30px] uppercase">3 january 2013</p>
                    </div>

                    <div class="pt-[30px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[6px] text-darkblue check relative">A mother, tired from having worked all day, got stressed out when her seven-month old son woke.</h3>
                        <p class="font-poppins font-semibold text-[12px] text-gold mb-[30px] uppercase">3 january 2013</p>
                    </div>

                    <div class="pt-[30px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-lg md:text-xl lg:text-[22px] xl:leading-[30px] mb-[6px] text-darkblue check relative">A mother, tired from having worked all day, got stressed out when her seven-month old son woke.</h3>
                        <p class="font-poppins font-semibold text-[12px] text-gold mb-[30px] uppercase">3 january 2013</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto mb-[70px] px-[10px] md:px-5 xl:px-0">
        <h2 class="font-lora font-semibold text-darkblue text-2xl md:text-3xl lg:text-[40px] xl:leading-[30px] mb-8">Video & Photo</h2>
        <div class="image-video__wrapper rounded-[20px] w-full lg:w-[75%] xl:max-w-[820px]"bg-white mb-10">
            <div class="p-2">
                <img src="/wp-content/uploads/2023/07/video.png" alt="">
            </div>
        </div>
        <div class="flex gap-5 items-center">
            <h6 class="font-poppins font-semibold text-[15px] uppercase tracking-[6px]">Social Media</h6>
            <a class="social__icon w-[53px] h-[53px] inline-flex items-center justify-center bg-white border border-[#e6eaf1] hover:bg-darkblue hover:border-darkblue" href="#"><svg class="icon" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 320 512"><path fill="#063579" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
            <a class="social__icon w-[53px] h-[53px] inline-flex items-center justify-center bg-white border border-[#e6eaf1] hover:bg-darkblue hover:border-darkblue" href="#"><svg class="icon" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><path fill="#063579"  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
            <a class="social__icon w-[53px] h-[53px] inline-flex items-center justify-center bg-white border border-[#e6eaf1] hover:bg-darkblue hover:border-darkblue" href="#"><svg class="icon" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><path fill="#063579"  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>
        </div>
    </div>
</section>


<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto mb-[40px] px-[10px] md:px-5 xl:px-0">
        <h2 class="font-lora font-semibold text-darkblue text-2xl md:text-3xl lg:text-[40px] xl:leading-[30px] mb-8">Offices & Operating Hours</h2>
        <div class="map-pic__wrapper rounded-[20px] w-full lg:w-[75%] xl:max-w-[820px]">
            <img src="/wp-content/uploads/2023/07/map-pic.png" alt="">
        </div>
    </div>
</section>


<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto px-[10px] md:px-5 xl:px-0">
        <div class="address__wrapper bg-white border border-[#e6eaf1] mb-[60px] rounded-lg w-full lg:w-[75%] xl:max-w-[820px]">
            <div class="px-3 md:px-5 lg:px-12 pt-0 lg:pt-[22px] xl:pb-2">
                <div class="flex flex-col divide-y divide-[#e6eaf1]">
                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-base xl:leading-[30px] mb-[10px] text-darkblue uppercase location2 relative">Address:</h3>
                        <p class="font-poppins font-regular text-[16px] text-davygray mb-4">Donec turpis felis, aliquet non libero sit amet, feugiat lacinia magna.</p>
                    </div>

                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-base xl:leading-[30px] mb-[10px] text-darkblue uppercase location2 relative">Address 2:</h3>
                        <p class="font-poppins font-regular text-[16px] text-davygray mb-4">Donec turpis felis, aliquet non libero sit amet, feugiat lacinia magna.</p>
                    </div>

                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-base xl:leading-[30px] mb-[10px] text-darkblue uppercase call2 relative">Phone</h3>
                        <p class="font-poppins font-bold text-[18px] mb-4">(212) 799-9638</p>
                    </div>

                    
                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-base xl:leading-[30px] mb-[10px] text-darkblue uppercase fax relative">fax</h3>
                        <p class="font-poppins font-regular text-[16px] text-davygray mb-4">Quisque ultrices consectetur</p>
                    </div>

                    
                    <div class="pt-[18px] pl-[26px]">
                        <h3 class="font-poppins font-semibold text-base xl:leading-[30px] mb-[10px] text-darkblue uppercase msg relative">Email Addresss</h3>
                        <p class="font-poppins font-regular text-[16px] text-davygray mb-4 underline"><a href="tel:">Quisque ultrices consectetur</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-babypowder">
    <div class="max-w-[1140px] mx-auto px-[10px] md:px-5 xl:px-0">
    <h2 class="font-lora font-semibold text-darkblue text-2xl md:text-3xl lg:text-[40px] xl:leading-[30px] mb-8">Reviews</h2>
        <div class="website__wrapper mb-[60px] w-full lg:w-[75%] xl:max-w-[820px]">
            <div id="splideslider" class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="w-full md:max-w-[400px] lg:w-[400px] bg-white border border-[#e6eaf1] rounded-lg">
                                <div class="px-10 pt-10 pb-[30px]">
                                    <img class="mb-6" src="/wp-content/uploads/2023/07/stars.png" alt="">
                                    <p class="font-poppins font-medium text-davygray text-[17.43px] mb-6">“Praesent sit amet turpis cursus, cursus quam ut, placerat erat. Sed efficitur tristique lacus, sed efficitur tristiquepretium neque mollis in the non.”</p>
                                    <div class="flex gap-2 items-center">
                                        <img class="rounded-full" src="/wp-content/uploads/2023/07/moto.png" alt="">
                                        <div>
                                            <h6 class="font-poppins font-semibold text-[18.43px]">Sarah Garrity</h6>
                                            <p class="font-poppins font-medium text-[14.43px] text-davygray">Business Officer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="w-full md:max-w-[400px] lg:w-[400px] bg-white border border-[#e6eaf1] rounded-lg">
                                <div class="px-10 pt-10 pb-[30px]">
                                    <img class="mb-6" src="/wp-content/uploads/2023/07/stars.png" alt="">
                                    <p class="font-poppins font-medium text-davygray text-[17.43px] mb-6">“Praesent sit amet turpis cursus, cursus quam ut, placerat erat. Sed efficitur tristique lacus, sed efficitur tristiquepretium neque mollis in the non.”</p>
                                    <div class="flex gap-2 items-center">
                                        <img class="rounded-full" src="/wp-content/uploads/2023/07/moto.png" alt="">
                                        <div>
                                            <h6 class="font-poppins font-semibold text-[18.43px]">Sarah Garrity</h6>
                                            <p class="font-poppins font-medium text-[14.43px] text-davygray">Business Officer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>