<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtTemplate extends EtBaseClass {
    public $TemplateName; //string
    public $LayoutHTML; //string
    public $BackgroundColor; //string
    public $BorderColor; //string
    public $BorderWidth; //int
    public $Cellpadding; //int
    public $Cellspacing; //int
    public $Width; //int
    public $Align; //string
    public $ActiveFlag; //int
    public $CategoryType; //string
    public $OwnerID; //int
    public $TemplateSubject; //string
    public $IsTemplateSubjectLocked; //boolean
}
