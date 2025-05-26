<?php

namespace Database\Seeders;

use App\Models\ServiceFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'name' => 'Door-to-Door',
                'slug' => Str::slug('Door-to-Door'),
                'meta_title' => 'Door-to-Door Car Transportation Service',
                'meta_description' => 'Enjoy stress-free car transport with our convenient door-to-door pickup and delivery service, wherever you are.',
                'details' => '
                    <h2>Door-to-Door Auto Transport Services</h2>
                    <p>When it comes to shipping your vehicle, nothing beats the convenience of door-to-door auto transport. We make the entire process effortless by picking up your vehicle directly from your location and delivering it right to your chosen destination, whether it\'s across town or across the country.</p>

                    <h3>What is Door-to-Door Car Shipping?</h3>
                    <p>Door-to-door car shipping means your vehicle is picked up as close as possible to your current address and delivered as close as possible to your final destination. There is no need for you to travel to a terminal or hand over your vehicle at a designated spot. We bring the service to your doorstep, saving you time and effort.</p>

                    <h3>Key Features of Our Service</h3>
                    <ul>
                        <li><strong>Direct Pickup and Delivery:</strong> No terminals, no waiting — direct service to your specified locations.</li>
                        <li><strong>Flexible Scheduling:</strong> Choose pickup and delivery times that work around your busy life.</li>
                        <li><strong>Professional Carriers:</strong> Our network includes licensed, insured, and highly trained transport drivers.</li>
                        <li><strong>Real-Time Tracking:</strong> Stay updated throughout the entire transport journey with live tracking options.</li>
                        <li><strong>Vehicle Protection:</strong> We conduct pre-transport inspections and use the best equipment to ensure your vehicle arrives safely.</li>
                    </ul>

                    <h3>How the Door-to-Door Shipping Process Works</h3>
                    <ol>
                        <li><strong>Quote and Booking:</strong> Request a free quote and schedule your transport online or over the phone.</li>
                        <li><strong>Vehicle Inspection:</strong> Our driver performs a detailed inspection at pickup and provides a copy of the inspection report.</li>
                        <li><strong>Transport:</strong> Your car is transported using open or enclosed carriers, depending on your choice and needs.</li>
                        <li><strong>Delivery:</strong> Upon arrival, another inspection is completed to ensure your car is delivered in the same condition.</li>
                    </ol>

                    <h3>Advantages of Choosing Door-to-Door Transport</h3>
                    <p>There are many reasons why door-to-door service is the preferred choice for vehicle owners:</p>
                    <ul>
                        <li><strong>Convenience:</strong> No terminal visits, no additional transport needed — full service at your address.</li>
                        <li><strong>Time-Saving:</strong> Avoid extra trips and handoffs. We work around your schedule.</li>
                        <li><strong>Reduced Risk:</strong> Fewer loading and unloading points mean a lower chance of any potential damage.</li>
                        <li><strong>Customer-Focused Service:</strong> We prioritize communication and support every step of the way.</li>
                    </ul>

                    <h3>Is Door-to-Door Service the Right Choice for You?</h3>
                    <p>If you need maximum flexibility, personalized service, and minimal involvement, then yes — door-to-door shipping is the ideal choice. It\'s perfect for:</p>
                    <ul>
                        <li>Individuals relocating across the country</li>
                        <li>Military personnel moving to new assignments</li>
                        <li>College students transporting cars to campuses</li>
                        <li>Dealerships needing fast vehicle delivery</li>
                        <li>Luxury car owners requiring careful handling</li>
                    </ul>

                    <blockquote>
                        <p><em>"Door-to-door car shipping is more than just a service — it\'s about providing you with peace of mind during your move or vehicle relocation."</em></p>
                    </blockquote>

                    <h3>Common Questions About Door-to-Door Shipping</h3>
                    <h4>What if my street is too narrow for the truck?</h4>
                    <p>No problem. Our carrier will coordinate with you to meet at a nearby large parking lot or a wide street where safe loading/unloading is possible.</p>

                    <h4>Is door-to-door service more expensive than terminal-to-terminal?</h4>
                    <p>It might be slightly more expensive due to the convenience, but for most customers, the time saved and ease of use are well worth the small extra investment.</p>

                    <h3>Get Started with Your Door-to-Door Car Shipping Today</h3>
                    <p>Ready to enjoy a stress-free vehicle transport experience? Contact us now for a free quote and see why so many customers trust our door-to-door auto shipping service for their most valuable vehicles. Let us handle the logistics while you focus on what matters most!</p>
                ',

                'icon' => 'fa-cart-flatbed',
                'main_image' => 'frontAssets/img/door-to-door.jpg',
                'is_active' => 'active',
            ],
            [
                'name' => 'Open Carrier',
                'slug' => Str::slug('Open Carrier'),
                'meta_title' => 'Open Carrier Car Shipping',
                'meta_description' => 'A cost-effective and reliable option for transporting standard vehicles across cities and states with full tracking.',
                'details' => '
                    <h2>Open Carrier Car Shipping Services</h2>
                    <p>When it comes to transporting vehicles across the country, open carrier shipping remains the most popular and affordable choice. It\'s the standard method trusted by dealerships, manufacturers, and individual car owners alike. Your vehicle will be safely loaded onto a multi-car open trailer — just like the ones you see delivering new cars every day.</p>

                    <h3>What is Open Carrier Shipping?</h3>
                    <p>Open carrier shipping means your vehicle will be transported on a two-level, open-air trailer without any enclosure. This method allows multiple vehicles to be shipped at once, reducing overall costs while maintaining a high standard of safety and efficiency.</p>

                    <h3>Key Benefits of Open Carrier Transport</h3>
                    <ul>
                        <li><strong>Affordability:</strong> Open carrier transport is the most economical option available for car shipping, offering significant savings over enclosed shipping methods.</li>
                        <li><strong>Wide Availability:</strong> With a larger network of open carriers, you can enjoy quicker pickup and delivery times compared to enclosed transport options.</li>
                        <li><strong>Industry Standard:</strong> The majority of new vehicles sold and transported across the country use open carrier trailers, showcasing their reliability and safety.</li>
                        <li><strong>Efficiency:</strong> Open trailers can transport up to 10 vehicles at a time, making the process highly efficient for customers needing quick solutions.</li>
                        <li><strong>Flexibility:</strong> Suitable for almost all types of standard vehicles, including sedans, SUVs, trucks, and motorcycles.</li>
                    </ul>

                    <h3>How the Open Carrier Process Works</h3>
                    <ol>
                        <li><strong>Get a Free Quote:</strong> Submit your details online or call us to receive a competitive shipping estimate.</li>
                        <li><strong>Scheduling:</strong> We match you with a carrier based on your timeframe and location preferences.</li>
                        <li><strong>Pickup:</strong> The carrier arrives at your location (or as close as possible) to load your vehicle onto the trailer.</li>
                        <li><strong>Transport:</strong> Your car travels securely with others towards the destination.</li>
                        <li><strong>Delivery:</strong> Upon arrival, you inspect your vehicle to ensure it has arrived safely and in excellent condition.</li>
                    </ol>

                    <h3>When Should You Choose Open Carrier Shipping?</h3>
                    <p>Open carrier transport is an excellent choice in many scenarios, including:</p>
                    <ul>
                        <li>Moving standard daily driver vehicles (cars, trucks, SUVs)</li>
                        <li>Relocating across the country for a new job or home</li>
                        <li>College students transporting their cars to campus</li>
                        <li>Seasonal moves to warmer or cooler climates</li>
                        <li>Fleet deliveries for dealerships or rental companies</li>
                    </ul>

                    <blockquote>
                        <p><em>"Open carrier transport combines affordability, reliability, and convenience — making it the go-to solution for most vehicle shipping needs."</em></p>
                    </blockquote>

                    <h3>Is Your Car Safe on an Open Carrier?</h3>
                    <p>Absolutely. While your car will be exposed to outdoor elements (such as rain or dust), it is securely strapped and carefully handled by professional drivers trained to protect vehicles during long hauls. Moreover, all shipments are fully insured for your peace of mind.</p>

                    <h3>Pros and Cons at a Glance</h3>
                    <table style="width:100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ccc; padding: 8px;">Pros</th>
                                <th style="border: 1px solid #ccc; padding: 8px;">Cons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">Lower cost</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Exposure to weather</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">Faster pickup times</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Less protection compared to enclosed trailers</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">More carrier options</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Might get dust or road debris (minor risk)</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Frequently Asked Questions About Open Carrier Shipping</h3>

                    <h4>Is open carrier transport safe for new vehicles?</h4>
                    <p>Yes, it is. Most new cars delivered to dealerships are transported using open carriers, highlighting their trust and reliability.</p>

                    <h4>How much cheaper is open carrier compared to enclosed?</h4>
                    <p>On average, open carrier transport can be 30-40% cheaper than enclosed transport, depending on distance, vehicle size, and season.</p>

                    <h3>Ready to Book Your Open Carrier Auto Transport?</h3>
                    <p>Let us simplify your vehicle shipping experience! Contact our team today for a free quote and discover why open carrier shipping is the smart choice for affordable, efficient, and dependable car transportation services.</p>
                ',

                'icon' => 'fa-truck',
                'main_image' => 'frontAssets/img/open-carrier.jpg',
                'is_active' => 'active',
            ],
            [
                'name' => 'Enclosed Shipping',
                'slug' => Str::slug('Enclosed Shipping'),
                'meta_title' => 'Enclosed Car Shipping Service',
                'meta_description' => 'Protect your luxury or classic cars with our enclosed shipping service—shielded from weather, dust, and road debris.',
                'details' => '
                    <h2>Enclosed Car Shipping Services</h2>
                    <p>When only the best protection will do, enclosed car shipping is the premium choice for transporting high-value, exotic, classic, or vintage vehicles. Your vehicle rides in a fully covered trailer, shielded from the elements, road debris, and public exposure — ensuring it arrives in pristine condition, no matter the distance.</p>

                    <h3>What is Enclosed Shipping?</h3>
                    <p>Enclosed shipping transports your vehicle inside a fully enclosed trailer, offering complete protection throughout the journey. Unlike open carriers, enclosed transport shields vehicles from weather conditions like rain, snow, and sun, as well as dirt, dust, and potential road hazards. This method guarantees minimal exposure and maximum security for your prized asset.</p>

                    <h3>Key Benefits of Enclosed Car Transport</h3>
                    <ul>
                        <li><strong>Maximum Protection:</strong> Vehicles are safeguarded against all environmental and road-related risks during transit.</li>
                        <li><strong>Ideal for Luxury and Specialty Cars:</strong> Perfect for luxury, exotic, antique, classic, custom, or collectible vehicles requiring extra care.</li>
                        <li><strong>Personalized Handling:</strong> Fewer vehicles are transported at once, allowing carriers to provide white-glove service with careful attention to detail.</li>
                        <li><strong>Insurance Coverage:</strong> Higher insurance limits are often included for enclosed transport, adding an extra layer of peace of mind.</li>
                        <li><strong>Discreet Transport:</strong> Keep your high-profile vehicle out of public view during transit.</li>
                    </ul>

                    <h3>How the Enclosed Shipping Process Works</h3>
                    <ol>
                        <li><strong>Request a Premium Quote:</strong> Provide your vehicle and destination details to receive a customized enclosed transport quote.</li>
                        <li><strong>Schedule Pickup:</strong> Choose a pickup window that suits your needs, with flexible door-to-door options available.</li>
                        <li><strong>Safe Loading:</strong> Specialized equipment like liftgates and soft tie-downs ensure safe and damage-free loading.</li>
                        <li><strong>Protected Journey:</strong> Your vehicle travels fully enclosed and secure, avoiding exposure to outside elements.</li>
                        <li><strong>Secure Delivery:</strong> Upon arrival, a detailed inspection ensures your vehicle is delivered exactly as it was picked up.</li>
                    </ol>

                    <h3>When Should You Choose Enclosed Car Shipping?</h3>
                    <p>Consider enclosed shipping if you are transporting any of the following:</p>
                    <ul>
                        <li>Luxury or exotic vehicles (Ferrari, Lamborghini, Rolls-Royce, Bentley, etc.)</li>
                        <li>Vintage and classic cars</li>
                        <li>Custom or modified vehicles</li>
                        <li>High-value or rare automobiles</li>
                        <li>Motorcycles or collectible bikes</li>
                    </ul>

                    <blockquote>
                        <p><em>"When your vehicle deserves five-star treatment, enclosed auto transport offers unbeatable protection and care."</em></p>
                    </blockquote>

                    <h3>Pros and Cons of Enclosed Shipping</h3>
                    <table style="width:100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ccc; padding: 8px;">Pros</th>
                                <th style="border: 1px solid #ccc; padding: 8px;">Cons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">Ultimate protection from elements and road debris</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Higher cost compared to open carrier</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">Ideal for rare and valuable vehicles</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Fewer carriers available (may need flexible scheduling)</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px;">Private and discreet transport</td>
                                <td style="border: 1px solid #ccc; padding: 8px;">Longer transit times in some cases</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Frequently Asked Questions About Enclosed Auto Transport</h3>

                    <h4>Is enclosed transport worth the extra cost?</h4>
                    <p>For valuable, luxury, or classic vehicles, absolutely. The protection and peace of mind are well worth the investment when it comes to safeguarding your car\'s value and condition.</p>

                    <h4>Does enclosed shipping take longer?</h4>
                    <p>It can, depending on the availability of enclosed carriers and your location. However, the safety and specialized care often outweigh any minor delays.</p>

                    <h3>Ready to Protect Your Vehicle with Enclosed Shipping?</h3>
                    <p>Don\'t take chances with your valuable asset. Choose enclosed transport for superior safety and complete peace of mind. Contact us today to schedule your premium auto shipping service and ensure your vehicle arrives in showroom condition!</p>
                ',

                'icon' => 'fa-truck-ramp-box',
                'main_image' => 'frontAssets/img/enclosed.jpg',
                'is_active' => 'active',
            ],
        ];

        foreach ($features as $item) {
            ServiceFeature::create($item);
        }
    }
}
