<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithFileUploads;

class ApplicationForm extends Component
{
    use WithFileUploads;

    public
        $applyingForPrograms = [
            "Degree",
            "Masters"
        ],
        $applyingForDegreeDepartments = [
            "Accounting and Finance",
            "Business Management",
            "Marketing Management",
            "Computer Science"
        ],
        $applyingForMastersDepartments = [
            "MBA",
            "Project Management",
            "Leadership",
            "Software Engineering"
        ],
        $applyingForDegreeModalitys = [
            "Regular",
            "Extension"
        ],
        $applyingForMastersModalitys = [
            "Weekend",
            "Extension"
        ],
        $currentDepartments = [
            "Accounting and Finance",
            "Accounting and Finance and Management",
            "Accounting Information System",
            "Adult Health Nursing",
            "Agribusiness and Value Chain Management",
            "Agribusiness Development and Management",
            "Agribusiness Management",
            "Agricultural Economics",
            "Agricultural Extension",
            "Amharic",
            "Animal Production and Technology",
            "Arabic",
            "Arabic Language and Literature",
            "Automotive and Vehicle Technology",
            "Automotive Technology",
            "Automotive Technology and Vehicles Management",
            "Aviation Management",
            "Aviation Security and Research Management",
            "Banking and Finance",
            "Biomedical Engineering",
            "Business Administration",
            "Business Administration in Construction Management",
            "Business Administration in Information System",
            "Business Administration in Accounting and Finance",
            "Business Administration in Hospitality Management",
            "Business Administration in Human Resource Management",
            "Business Administration in Logistics and Supply Chain Management",
            "Business Administration in Marketing Management",
            "Business Administration in Risk and Insurance",
            "Business Administration in Strategic Management",
            "Business Information System",
            "Business Leadership",
            "Business Management",
            "Civil and Environmental Engineering",
            "Civil Engineering",
            "Clinical Nursing",
            "Compressive Nursing",
            "Ophthalmology",
            "Computer Engineering",
            "Computer Science",
            "Construction Technology and Management",
            "Cooperative",
            "Cooperative Accounting and Auditing",
            "Cooperative Business Management",
            "Crop Production",
            "Dental Medicine",
            "Dental Science",
            "Development Economics",
            "Development Studies",
            "Disaster Risk Management and Sustainable Development",
            "Doctor Science",
            "Economics",
            "Economics and Finance",
            "Educational Planning and Management",
            "Electrical and Computer Engineering",
            "Electrical Electronics Technology",
            "Electrical Engineering",
            "English",
            "Enterprise System Engineering",
            "Environmental Science and Sustainable Development",
            "Financial Economics",
            "Food Science and Technology",
            "General Surgery Specialty",
            "Geography",
            "Global Studies",
            "Global Studies and International Relation",
            "Health Extension",
            "Health Informatics",
            "Higher Education Research and Sociology",
            "History",
            "Horticulture",
            "Hotel Management",
            "Human Nutrition",
            "Human Resource Management",
            "Human Resource Management and Leadership",
            "Hydraulic and Water Resource Engineering",
            "Information Communication Technology",
            "Information System",
            "Information Technology",
            "Information Technology and Systems",
            "Information Technology Management",
            "International Cooperation Development",
            "International Relations",
            "International Trade and Economics",
            "Journalism and Communication",
            "Journalism and Mass Communication",
            "Law",
            "Leadership",
            "Leadership and Development Studies",
            "Leadership Management",
            "Library and Information Science",
            "Logistic and Supply Chain Management",
            "Management",
            "Management Information System",
            "Manufacturing Technology",
            "Marketing Management",
            "Maternity and Reproductive Health Nursing",
            "Mathematics",
            "Medical Laboratory",
            "Medical Laboratory Science",
            "Medical Laboratory Technology",
            "Medical Specialty in Orthopaedics Surgery",
            "Medicine",
            "Midwifery",
            "Mining Engineering",
            "Nursing",
            "Nutrition",
            "Office Management and Technology System",
            "Organizational Management",
            "Paediatrics Nursing",
            "Pharmacy",
            "Political Science",
            "Procurement and Supply Management",
            "Project Planning and Management",
            "Public Administration and Development Management",
            "Public Health",
            "Public Health (General)",
            "Public Health (Nutrition)",
            "Public Health in Nutrition",
            "Public Health in Reproductive Health",
            "Quality and Production Management",
            "Radiography",
            "Radiology",
            "Risk and Insurance",
            "Rural Development",
            "Rural Development and Agricultural Extension",
            "Social Health",
            "Social Work",
            "Sociology",
            "Sociology and Anthropology",
            "Sociology and Social Anthropology",
            "Software Engineering",
            "Space Science",
            "Strategic Management",
            "Strategic Research",
            "Surveying Engineering",
            "Surveying Technology",
            "Tax and Custom Administration",
            "Tourism and Hospitality Management",
            "Tourism and Hotel Management",
            "Tourism Management",
            "Transformational Leadership and Change",
            "Urban Development Management",
            "Veterinary Science",
            "Gender and Development Studies",
            "Project Management",
            "Clinical Midwifery",
            "Anesthesia",
            "Animal Production",
            "Development Management",
            "Organizational Leadership",
            "Finance and Investment",
            "Construction Management",
            "Animal Health",
            "Community Nutrition",
            "Plant Science",
            "Architecture and Urban Planning",
            "Emergency Nursing",
            "Clinical Pharmacy",
            "Business Administration in Construction Management",
            "Mechanical Engineering",
            "Crime Prevention",
            "Adult Nursing",
            "Accounting",
            "Internal Medicine",
            "Maxillo-Facial Surgery",
            "Pediatrics",
            "Obstetrics and Gynecology",
            "Health Care Quality",
            "Project Management, Analysis and Evaluation",
            "Family Health",
            "Interior Designing",
            "Fashion Technology",
            "Business Administration in Insurance",
            "Business Administration in Global Business",
            "Medical Radiology Technology",
            "Public Health in Health Service Management",
            "Environmental Health",
            "Criminology and Criminal Justice",
            "Governance and Development Studies",
            "Anthropology",
            "Civics and Ethical Studies",
            "Geography and Environmental Studies",
            "History and Heritage Management",
            "English Language and Literature",
            "Amharic Language and Literature",
            "Oromo Language and Literature",
            "Commerce",
            "Public Administration",
            "Business in impact Entrepreneurship",
            "Clinical Epidemiology",
            "Public Health in Monitoring and Evaluation",
            "Aeronautical Engineering",
            "Science in Economics",
            "Organizational Leadership Management",
            "Business Administration Specialization in Marketing",
            "Epidemiology and Biostatistics",
            "Aircraft Maintenance Engineering",
            "Aviation Management and Operations",
            "Business Administration in Aviation Management",
            "Developmental Leadership",
            "Business Administration in Business Leadership",
            "Business Administration in Banking and Finance",
            "Peace and Development Studies",
            "Construction Project Management",
            "Environmental and Natural Resource Management",
            "Engineering Management",
            "Peace and Security Management",
            "Police Leadership and Management",
            "Film Arts",
            "Sport Sciences",
            "Political Science and International Relation",
            "Teaching English as a Foreign Language (TEFL)",
            "Business Administration in International Trend and Economics",
            "Leadership and Public Service Management",
            "International Business Management",
            "Agronomy"
        ];
    public
        $firstName,
        $middleName,
        $lastName,
        $dateOfBirth,
        $sex,

        $country,
        $state,
        $city,
        $mobile,
        $email,

        $currentEducationLevel,
        $currentDepartment,
        $fromInstitution,
        $applyingForProgram,
        $applyingForDepartment = NULL,
        $applyingForModality = NULL,

        $photoFile,
        $udDegreeFile,
        $udTranscriptFile,
        $hsTranscriptFile,
        $idCardFile,

        $reason,
        $agree = NULL,

        $currentStep = 1,

        $applyingForDepartments,
        $applyingForModalitys;

    protected $rules = [
        'email' => 'required|email|unique',
        'agree' => 'required',
    ];

    public function firstStepSubmit()
    {
        $this->validate([
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'dateOfBirth' => 'required',
            'sex' => 'required',
        ]);
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'mobile' => 'required',
            'email' => 'required',
        ]);
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'currentEducationLevel' => 'required',
            'currentDepartment' => 'required',
            'fromInstitution' => 'required',
            'applyingForProgram' => 'required',
            'applyingForDepartment' => 'required',
            'applyingForModality' => 'required',
        ]);
        $this->currentStep = 4;
    }

    public function fourthStepSubmit()
    {
        /*$this->validate([
            'udDegreeFile' => 'file|max:1024',
            'udTranscriptFile' => 'required|max:2048|mimes:pdf,jpeg,png',
            'hsTranscriptFile' => 'required|max:2048|mimes:pdf,jpeg,png',
            'idCardFile' => 'required|max:2048|mimes:pdf,jpeg,png',
            'photoFile' => ['required', 'mimes:pdf,docx', 'max:2048'],
        ]);*/

        $this->currentStep = 5;
    }

    public function submitForm()
    {
        $this->validate([
            'reason' => 'required',
            'agree' => 'required',
        ]);

        Application::create([
            'firstName' => $this->firstName,
            'middleName' => $this->middleName,
            'lastName' => $this->lastName,
            'dateOfBirth' => $this->dateOfBirth,
            'sex' => $this->sex,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'currentEducationLevel' => $this->currentEducationLevel,
            'currentDepartment' => $this->currentDepartment,
            'fromInstitution' => $this->fromInstitution,
            'applyingForProgram' => $this->applyingForProgram,
            'applyingForDepartment' => $this->applyingForDepartment,
            'applyingForModality' => $this->applyingForModality,

            /*
            'photoFilePath' => $this->,
            'udDegreeFilePath' => $this->,
            'udTranscriptFilePath' => $this->,
            'hsTranscriptFilePath' => $this->,
            'idCardFilePath' => $this->, 
            */
        ]);
        session()->flash('message', 'Your Application has been Successfully Subbmited!');

        $this->reset();
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function mount($applyingForProgram = null)
    {
        $this->applyingForPrograms;
        $this->applyingForDepartments = collect();
        $this->applyingForModalitys = collect();
    }

    public function updatedApplyingForProgram($applyingForProgram)
    {
        if (!is_null($applyingForProgram)) {
            if ($applyingForProgram === 'Degree') {
                $this->applyingForDepartments = $this->applyingForDegreeDepartments;
                $this->applyingForModalitys = $this->applyingForDegreeModalitys;
            } elseif ($applyingForProgram === 'Masters') {
                $this->applyingForDepartments = $this->applyingForMastersDepartments;
                $this->applyingForModalitys = $this->applyingForMastersModalitys;
            } elseif ($applyingForProgram === '') {
                $this->applyingForDepartments = collect();
                $this->applyingForModalitys = collect();
            }
            $this->applyingForDepartment = null;
            $this->applyingForModality = null;
        }
    }

    public function render()
    {
        return view('livewire.application-form');
    }
}
